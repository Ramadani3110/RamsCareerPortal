<?php

namespace App\Livewire\Jobs;

use App\Models\JobPosts;
use Livewire\Component;
use Livewire\WithPagination;

class JobList extends Component
{
    use WithPagination;
    
    // Set the pagination theme to your custom view
    // protected function paginationView()
    // {
    //     return 'vendor.livewire.flowbite';
    // }
    
    public $search = '';
    public $location = '';
    public $department = '';
    public $workType = '';
    
    protected $queryString = [
        'search' => ['except' => ''],
        'location' => ['except' => ''],
        'department' => ['except' => ''],
        'workType' => ['except' => ''],
    ];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function updatingLocation()
    {
        $this->resetPage();
    }
    
    public function updatingDepartment()
    {
        $this->resetPage();
    }
    
    public function updatingWorkType()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        $jobPosts = JobPosts::query()
            ->when($this->search, function ($query) {
                return $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->when($this->location, function ($query) {
                return $query->where('location', 'like', '%' . $this->location . '%');
            })
            ->when($this->department, function ($query) {
                if ($this->department !== 'All Categories') {
                    return $query->where('department', $this->department);
                }
                return $query;
            })
            ->when($this->workType, function ($query) {
                if ($this->workType !== '') {
                    return $query->where('work_type', $this->workType);
                }
                return $query;
            })
            ->where('status', 'open')
            ->with('skills')
            ->paginate(9);
        
        return view('livewire.jobs.job-list', [
            'jobPosts' => $jobPosts
        ]);
    }
}
