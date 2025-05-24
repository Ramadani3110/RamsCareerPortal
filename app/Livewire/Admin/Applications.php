<?php

namespace App\Livewire\Admin;

use App\Models\Applications as ModelsApplications;
use Livewire\Component;
use Livewire\WithPagination;

class Applications extends Component
{
    use WithPagination;

    public $search = '';
    public $status = '';
    public $perPage = 10;
    
    protected $queryString = [
        'search' => ['except' => ''],
        'status' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function updatingStatus()
    {
        $this->resetPage();
    }
    
    public function updateStatus($applicationId, $newStatus)
    {
        $application = ModelsApplications::findOrFail($applicationId);
        $application->status = $newStatus;
        $application->save();
        
        session()->flash('message', 'Application status updated successfully!');
    }
    
    public function render()
    {
        $applications = ModelsApplications::with(['user', 'job'])
            ->when($this->search, function ($query) {
                return $query->whereHas('user', function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%');
                })->orWhereHas('job', function ($q) {
                    $q->where('title', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->status, function ($query) {
                return $query->where('status', $this->status);
            })
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);
            
        return view('livewire.admin.applications', [
            'applications' => $applications
        ]);
    }

}
