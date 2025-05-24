<?php

namespace App\Livewire\Jobs;

use App\Models\Applications;
use App\Models\JobPosts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class JobDetails extends Component
{
    use WithFileUploads;
    
    public $jobId;
    public $job;
    public $cv;
    public $portfolioLink;
    public $hasApplied = false;
    public $showApplyForm = false;
    public $similarJobs = [];
    
    protected $rules = [
        'cv' => 'required|file|mimes:pdf,doc,docx|max:10240', // 10MB max
        'portfolioLink' => 'nullable|url',
    ];
    
    protected $messages = [
        'cv.required' => 'Please upload your CV.',
        'cv.mimes' => 'CV must be a PDF, DOC, or DOCX file.',
        'cv.max' => 'CV file size must not exceed 10MB.',
        'portfolioLink.url' => 'Portfolio link must be a valid URL.',
    ];
    
    public function mount($jobId)
    {
        $this->jobId = $jobId;
        $this->job = JobPosts::with('skills')->findOrFail($jobId);
        
        // Check if user has already applied
        if (Auth::check()) {
            $this->hasApplied = Applications::where('user_id', Auth::id())
                ->where('job_id', $this->jobId)
                ->exists();
        }
        
        // Get similar jobs based on department or skills
        $this->loadSimilarJobs();
    }
    
    public function loadSimilarJobs()
    {
        $this->similarJobs = JobPosts::where('id', '!=', $this->jobId)
            ->where('status', 'open')
            ->where(function($query) {
                $query->where('department', $this->job->department)
                    ->orWhere('work_type', $this->job->work_type);
            })
            ->inRandomOrder()
            ->limit(3)
            ->get();
    }
    
    public function toggleApplyForm()
    {
        $this->showApplyForm = !$this->showApplyForm;
    }
    
    public function apply()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $this->validate();
        
        $cvPath = $this->cv->store('cvs', 'public');
        
        Applications::create([
            'user_id' => Auth::id(),
            'job_id' => $this->jobId,
            'cv_path' => $cvPath,
            'portfolio_path' => $this->portfolioLink,
            'status' => 'pending',
        ]);
        
        $this->hasApplied = true;
        $this->showApplyForm = false;
        session()->flash('message', 'Your application has been submitted successfully!');
        
        // Reset form
        $this->reset(['cv', 'portfolioLink']);
    }
    
    public function render()
    {
        return view('livewire.jobs.job-details');
    }
}
