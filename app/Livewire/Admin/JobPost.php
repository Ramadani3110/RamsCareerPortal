<?php

namespace App\Livewire\Admin;

use App\Models\JobPosts;
use App\Models\Skils;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class JobPost extends Component
{
    use WithPagination;
    
    // Properties for the form
    public $jobPostId;
    public $title;
    public $description;
    public $department;
    public $location;
    public $status = 'open';
    public $work_type = 'on-site';
    public $salary_min;
    public $salary_max;
    public $selectedSkills = [];
    
    // Modal control
    public $showModal = false;
    public $showDetailModal = false;
    public $showDeleteModal = false;
    public $modalMode = 'create';
    
    // Filters
    public $search = '';
    public $filterStatus = '';
    public $filterWorkType = '';
    
    // Validation rules
    protected function rules()
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required',
            'department' => 'nullable|string',
            'location' => 'nullable|string',
            'status' => 'required|in:open,closed',
            'work_type' => 'required|in:on-site,remote,hybrid',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0|gte:salary_min',
            'selectedSkills' => 'array',
        ];
    }
    
    public function render()
    {
        $jobPosts = JobPosts::query()
            ->when($this->search, function ($query) {
                return $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->when($this->filterStatus, function ($query) {
                return $query->where('status', $this->filterStatus);
            })
            ->when($this->filterWorkType, function ($query) {
                return $query->where('work_type', $this->filterWorkType);
            })
            ->with('skills')
            ->latest()
            ->paginate(10);
            
        $allSkills = Skils::orderBy('name')->get();
        
        return view('livewire.admin.job-post', [
            'jobPosts' => $jobPosts,
            'allSkills' => $allSkills,
        ]);
    }
    
    public function openCreateModal()
    {
        $this->resetValidation();
        $this->resetExcept(['search', 'filterStatus', 'filterWorkType']);
        $this->modalMode = 'create';
        $this->showModal = true;
    }
    
    public function openEditModal($id)
    {
        $this->resetValidation();
        $this->resetExcept(['search', 'filterStatus', 'filterWorkType']);
        
        $jobPost = JobPosts::with('skills')->findOrFail($id);
        $this->jobPostId = $jobPost->id;
        $this->title = $jobPost->title;
        $this->description = $jobPost->description;
        $this->department = $jobPost->department;
        $this->location = $jobPost->location;
        $this->status = $jobPost->status;
        $this->work_type = $jobPost->work_type;
        $this->salary_min = $jobPost->salary_min;
        $this->salary_max = $jobPost->salary_max;
        $this->selectedSkills = $jobPost->skills->pluck('id')->toArray();
        
        $this->modalMode = 'edit';
        $this->showModal = true;
    }
    
    public function closeModal()
    {
        $this->showModal = false;
    }
    
    public function save()
    {
        $this->validate();
        
        if ($this->modalMode === 'create') {
            $jobPost = JobPosts::create([
                'title' => $this->title,
                'description' => $this->description,
                'department' => $this->department,
                'location' => $this->location,
                'status' => $this->status,
                'work_type' => $this->work_type,
                'salary_min' => $this->salary_min,
                'salary_max' => $this->salary_max,
            ]);
            
            $jobPost->skills()->sync($this->selectedSkills);
            session()->flash('message', 'Job post created successfully!');
        } else {
            $jobPost = JobPosts::findOrFail($this->jobPostId);
            $jobPost->update([
                'title' => $this->title,
                'description' => $this->description,
                'department' => $this->department,
                'location' => $this->location,
                'status' => $this->status,
                'work_type' => $this->work_type,
                'salary_min' => $this->salary_min,
                'salary_max' => $this->salary_max,
            ]);
            
            $jobPost->skills()->sync($this->selectedSkills);
            session()->flash('message', 'Job post updated successfully!');
        }
        
        $this->closeModal();
    }
    
    // Other methods (openDetailModal, closeDetailModal, openDeleteModal, etc.)
    public function openDetailModal($id)
    {
        $this->jobPostId = $id;
        $this->showDetailModal = true;
    }
    
    public function closeDetailModal()
    {
        $this->showDetailModal = false;
        $this->jobPostId = null;
    }
    
    public function openDeleteModal($id)
    {
        $this->jobPostId = $id;
        $this->showDeleteModal = true;
    }
    
    public function closeDeleteModal()
    {
        $this->showDeleteModal = false;
        $this->jobPostId = null;
    }
    
    public function confirmDelete()
    {
        $jobPost = JobPosts::findOrFail($this->jobPostId);
        $jobPost->delete();
        
        session()->flash('message', 'Job post deleted successfully!');
        $this->closeDeleteModal();
    }
    
    public function toggleStatus($id)
    {
        $jobPost = JobPosts::findOrFail($id);
        $jobPost->status = $jobPost->status === 'open' ? 'closed' : 'open';
        $jobPost->save();
        
        session()->flash('message', 'Job status updated successfully!');
    }
    
    public function clearFilters()
    {
        $this->search = '';
        $this->filterStatus = '';
        $this->filterWorkType = '';
    }
}
