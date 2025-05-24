<?php

namespace App\Livewire\Applicants;

use App\Models\Applications;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class MyApplications extends Component
{
    use WithPagination;
    
    public $perPage = 10;
    public $statusFilter = '';
    public $search = '';
    
    protected $queryString = [
        'statusFilter' => ['except' => ''],
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function updatingStatusFilter()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        $applications = Applications::with('job')
            ->where('user_id', Auth::id())
            ->when($this->search, function ($query) {
                return $query->whereHas('job', function ($q) {
                    $q->where('title', 'like', '%' . $this->search . '%')
                        ->orWhere('department', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->statusFilter, function ($query) {
                return $query->where('status', $this->statusFilter);
            })
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);
            
        return view('livewire.applicants.my-applications', [
            'applications' => $applications
        ]);
    }
}
