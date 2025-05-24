<?php

namespace App\Livewire\Admin;

use App\Models\Applications;
use App\Models\JobPosts;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{
    public $totalApplications = 0;
    public $totalJobs = 0;
    public $totalUsers = 0;
    public $pendingApplications = 0;
    public $acceptedApplications = 0;
    public $rejectedApplications = 0;
    public $recentApplications = [];
    public $applicationStats = [];
    public $popularJobs = [];
    public $jobsByStatus = [];
    
    public function mount()
    {
        $this->loadDashboardData();
    }
    
    public function loadDashboardData()
    {
        // Get counts
        $this->totalApplications = Applications::count();
        $this->totalJobs = JobPosts::count();
        $this->totalUsers = User::where('role', 'applicant')->count();
        
        // Application status counts
        $this->pendingApplications = Applications::where('status', 'pending')->count();
        $this->acceptedApplications = Applications::where('status', 'accepted')->count();
        $this->rejectedApplications = Applications::where('status', 'rejected')->count();
        
        // Recent applications
        $this->recentApplications = Applications::with(['user', 'job'])
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
            
        // Application stats for chart (last 6 months)
        $this->applicationStats = $this->getApplicationStats();
        
        // Popular jobs (most applied)
        $this->popularJobs = JobPosts::withCount('applications')
            ->orderBy('applications_count', 'desc')
            ->limit(5)
            ->get();
            
        // Jobs by status
        $this->jobsByStatus = [
            'open' => JobPosts::where('status', 'open')->count(),
            'closed' => JobPosts::where('status', 'closed')->count()
        ];
    }
    
    private function getApplicationStats()
    {
        $stats = [];
        
        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $monthName = $date->format('M Y');
            
            $pending = Applications::where('status', 'pending')
                ->whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();
                
            $accepted = Applications::where('status', 'accepted')
                ->whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();
                
            $rejected = Applications::where('status', 'rejected')
                ->whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();
                
            $stats[] = [
                'month' => $monthName,
                'pending' => $pending,
                'accepted' => $accepted,
                'rejected' => $rejected,
                'total' => $pending + $accepted + $rejected
            ];
        }
        
        return $stats;
    }
    
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
