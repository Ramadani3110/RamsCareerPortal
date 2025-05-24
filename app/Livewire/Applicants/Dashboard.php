<?php

namespace App\Livewire\Applicants;

use App\Models\Applications;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $totalApplications = 0;
    public $pendingApplications = 0;
    public $acceptedApplications = 0;
    public $rejectedApplications = 0;
    public $recentApplications = [];
    public $applicationStats = [];
    
    public function mount()
    {
        $this->loadDashboardData();
    }
    
    public function loadDashboardData()
    {
        $userId = Auth::id();
        
        // Get application counts
        $this->totalApplications = Applications::where('user_id', $userId)->count();
        $this->pendingApplications = Applications::where('user_id', $userId)->where('status', 'pending')->count();
        $this->acceptedApplications = Applications::where('user_id', $userId)->where('status', 'accepted')->count();
        $this->rejectedApplications = Applications::where('user_id', $userId)->where('status', 'rejected')->count();
        
        // Get recent applications
        $this->recentApplications = Applications::with('job')
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
            
        // Get application stats for chart (last 6 months)
        $this->applicationStats = $this->getApplicationStats();
    }
    
    private function getApplicationStats()
    {
        $stats = [];
        $userId = Auth::id();
        
        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $monthName = $date->format('M Y');
            
            $count = Applications::where('user_id', $userId)
                ->whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();
                
            $stats[] = [
                'month' => $monthName,
                'count' => $count
            ];
        }
        
        return $stats;
    }
    
    public function render()
    {
        return view('livewire.applicants.dashboard');
    }
}
