<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    @if (session()->has('message'))
        <div id="alert-border-3" class="flex items-center p-4 mb-6 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ml-3 text-sm font-medium">
                {{ session('message') }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif

    <!-- Back button -->
    <div class="mb-6">
        <a href="{{ route('jobs-list') }}" class="inline-flex items-center text-sm font-medium text-teal-600 hover:text-teal-700">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Job Listings
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <!-- Job Header -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden mb-6">
                <div class="p-6">
                    <div class="flex items-start gap-4">
                        <!-- Company Logo Placeholder -->
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-teal-400 to-emerald-500 rounded-lg flex items-center justify-center text-white font-bold text-xl">
                            {{ strtoupper(substr($job->department ?? 'JOB', 0, 1)) }}
                        </div>

                        <div class="flex-1 min-w-0">
                            <!-- Job Title -->
                            <h1 class="text-2xl font-bold text-gray-900 mb-2">
                                {{ $job->title }}
                            </h1>

                            <!-- Company & Location -->
                            <div class="flex items-center text-sm text-gray-600 mb-3">
                                <span>{{ $job->department ?? 'Company' }}</span>
                                @if ($job->location)
                                    <span class="mx-1.5">•</span>
                                    <span>{{ $job->location }}</span>
                                @endif
                            </div>

                            <!-- Tags -->
                            <div class="flex flex-wrap gap-2">
                                <span class="{{ $job->work_type === 'remote'
                                    ? 'bg-emerald-50 text-emerald-700 ring-emerald-600/20'
                                    : ($job->work_type === 'hybrid'
                                        ? 'bg-sky-50 text-sky-700 ring-sky-600/20'
                                        : 'bg-amber-50 text-amber-700 ring-amber-600/20') }} 
                                    text-xs font-medium px-2.5 py-1 rounded-full ring-1 inline-block">
                                    {{ ucfirst($job->work_type) }}
                                </span>
                                
                                <span class="bg-teal-50 text-teal-700 ring-1 ring-teal-600/20 text-xs font-medium px-2.5 py-1 rounded-full">
                                    {{ $job->formatted_salary }}
                                </span>
                                
                                <span class="bg-gray-100 text-gray-700 ring-1 ring-gray-600/10 text-xs font-medium px-2.5 py-1 rounded-full">
                                    Posted {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
                    <div class="flex flex-wrap gap-3">
                        @if ($hasApplied)
                            <div class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-500 rounded-lg cursor-not-allowed">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Already Applied
                            </div>
                        @else
                            <button wire:click="toggleApplyForm" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-teal-600 rounded-lg hover:bg-teal-700 focus:ring-4 focus:outline-none focus:ring-teal-300 transition-all duration-200 shadow-sm hover:shadow">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Apply Now
                            </button>
                        @endif
                        
                        <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-200 transition-all duration-200">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                            Share
                        </button>
                        
                        <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-200 transition-all duration-200">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                            </svg>
                            Save
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Application Form (Conditional) -->
            @if ($showApplyForm && !$hasApplied)
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden mb-6">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">Apply for this Position</h2>
                        
                        <form wire:submit.prevent="apply">
                            <div class="mb-6">
                                <label class="block mb-2 text-sm font-medium text-gray-900" for="cv">Upload your CV (PDF, DOC, DOCX)</label>
                                <input wire:model="cv" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-teal-500" id="cv" type="file">
                                <p class="mt-1 text-xs text-gray-500">Max file size: 10MB</p>
                                @error('cv') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-6">
                                <label for="portfolioLink" class="block mb-2 text-sm font-medium text-gray-900">Portfolio Link (Optional)</label>
                                <input type="url" id="portfolioLink" wire:model="portfolioLink" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5" placeholder="https://your-portfolio.com">
                                <p class="mt-1 text-xs text-gray-500">Add a link to your portfolio, GitHub, or other relevant work</p>
                                @error('portfolioLink') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="flex items-center gap-3">
                                <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-teal-600 rounded-lg hover:bg-teal-700 focus:ring-4 focus:outline-none focus:ring-teal-300 transition-all duration-200 shadow-sm hover:shadow">
                                    Submit Application
                                </button>
                                <button type="button" wire:click="toggleApplyForm" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-200 transition-all duration-200">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
            
            <!-- Job Description -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden mb-6">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Job Description</h2>
                    <div class="prose max-w-none text-gray-700">
                        {{ $job->description }}
                    </div>
                </div>
            </div>
            
            <!-- Skills Required -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden mb-6">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Skills Required</h2>
                    <div class="flex flex-wrap gap-2">
                        @forelse ($job->skills as $skill)
                            <span class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1.5 rounded-md">
                                {{ $skill->name }}
                            </span>
                        @empty
                            <p class="text-gray-500">No specific skills listed for this position.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="lg:col-span-1">
            <!-- Company Info -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden mb-6">
                <div class="p-6">
                    <h2 class="text-lg font-bold text-gray-900 mb-4">About the Company</h2>
                    
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-teal-400 to-emerald-500 rounded-lg flex items-center justify-center text-white font-bold text-lg mr-3">
                            {{ strtoupper(substr($job->department ?? 'JOB', 0, 1)) }}
                        </div>
                        <div>
                            <h3 class="text-base font-semibold text-gray-900">{{ $job->department ?? 'Company' }}</h3>
                            @if ($job->location)
                                <p class="text-sm text-gray-600">{{ $job->location }}</p>
                            @endif
                        </div>
                    </div>
                    
                    <div class="text-sm text-gray-600">
                        <p>This is a {{ strtolower($job->work_type) }} position with a salary range of {{ $job->formatted_salary }}.</p>
                    </div>
                </div>
            </div>
            
            <!-- Similar Jobs -->
            @if (count($similarJobs) > 0)
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-lg font-bold text-gray-900 mb-4">Similar Jobs</h2>
                        
                        <div class="space-y-4">
                            @foreach ($similarJobs as $similarJob)
                                <div class="border-b border-gray-100 pb-4 last:border-0 last:pb-0">
                                    <h3 class="text-base font-semibold text-gray-900 hover:text-teal-600 transition-colors duration-200">
                                        <a href="{{ route('jobs.show', $similarJob->id) }}">{{ $similarJob->title }}</a>
                                    </h3>
                                    <div class="flex items-center text-xs text-gray-500 mt-1 mb-2">
                                        <span>{{ $similarJob->department ?? 'Company' }}</span>
                                        @if ($similarJob->location)
                                            <span class="mx-1.5">•</span>
                                            <span>{{ $similarJob->location }}</span>
                                        @endif
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="{{ $similarJob->work_type === 'remote'
                                            ? 'bg-emerald-50 text-emerald-700 ring-emerald-600/20'
                                            : ($similarJob->work_type === 'hybrid'
                                                ? 'bg-sky-50 text-sky-700 ring-sky-600/20'
                                                : 'bg-amber-50 text-amber-700 ring-amber-600/20') }} 
                                            text-xs font-medium px-2 py-0.5 rounded-full ring-1 inline-block">
                                            {{ ucfirst($similarJob->work_type) }}
                                        </span>
                                        <span class="text-xs text-gray-500">
                                            {{ $similarJob->formatted_salary }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
