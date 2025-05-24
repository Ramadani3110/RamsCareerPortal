<div class="space-y-6">

    <div class="bg-gradient-to-r from-teal-800 to-emerald-800 rounded-xl p-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold mb-2">Welcome back, {{ Auth::user()->name }}!</h1>
                <p class="text-teal-100">Manage applications, oversee recruitment, and monitor hiring progress</p>
            </div>
            <div class="hidden md:block">
                <svg class="w-16 h-16 text-teal-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6">
                    </path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Total Applications -->
        <div class="bg-gray-800 rounded-lg border border-gray-700 shadow-md p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-blue-900 bg-opacity-50 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-400">Total Applications</p>
                    <p class="text-2xl font-bold text-white">{{ $totalApplications }}</p>
                </div>
            </div>
        </div>

        <!-- Total Jobs -->
        <div class="bg-gray-800 rounded-lg border border-gray-700 shadow-md p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-teal-900 bg-opacity-50 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-400">Total Jobs</p>
                    <p class="text-2xl font-bold text-white">{{ $totalJobs }}</p>
                </div>
            </div>
        </div>

        <!-- Total Users -->
        <div class="bg-gray-800 rounded-lg border border-gray-700 shadow-md p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-purple-900 bg-opacity-50 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-400">Total Applicants</p>
                    <p class="text-2xl font-bold text-white">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>

        <!-- Pending Applications -->
        <div class="bg-gray-800 rounded-lg border border-gray-700 shadow-md p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-yellow-900 bg-opacity-50 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-400">Pending Applications</p>
                    <p class="text-2xl font-bold text-white">{{ $pendingApplications }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Application Status Overview -->
        <div class="lg:col-span-2 bg-gray-800 rounded-lg border border-gray-700 shadow-md">
            <div class="p-6 border-b border-gray-700">
                <h2 class="text-lg font-bold text-white">Application Status Overview</h2>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-yellow-500">{{ $pendingApplications }}</div>
                        <div class="text-sm text-gray-400">Pending</div>
                        <div class="w-full bg-gray-700 rounded-full h-2 mt-2">
                            <div class="bg-yellow-500 h-2 rounded-full"
                                style="width: {{ $totalApplications > 0 ? ($pendingApplications / $totalApplications) * 100 : 0 }}%">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-green-500">{{ $acceptedApplications }}</div>
                        <div class="text-sm text-gray-400">Accepted</div>
                        <div class="w-full bg-gray-700 rounded-full h-2 mt-2">
                            <div class="bg-green-500 h-2 rounded-full"
                                style="width: {{ $totalApplications > 0 ? ($acceptedApplications / $totalApplications) * 100 : 0 }}%">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-red-500">{{ $rejectedApplications }}</div>
                        <div class="text-sm text-gray-400">Rejected</div>
                        <div class="w-full bg-gray-700 rounded-full h-2 mt-2">
                            <div class="bg-red-500 h-2 rounded-full"
                                style="width: {{ $totalApplications > 0 ? ($rejectedApplications / $totalApplications) * 100 : 0 }}%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jobs by Status -->
        <div class="bg-gray-800 rounded-lg border border-gray-700 shadow-md">
            <div class="p-6 border-b border-gray-700">
                <h2 class="text-lg font-bold text-white">Jobs by Status</h2>
            </div>
            <div class="p-6">
                <div class="flex items-center justify-center">
                    <div class="w-48 h-48">
                        <div class="relative w-full h-full rounded-full overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-white">{{ $totalJobs }}</div>
                                    <div class="text-sm text-gray-400">Total Jobs</div>
                                </div>
                            </div>
                            <svg viewBox="0 0 36 36" class="w-full h-full">
                                @if ($totalJobs > 0)
                                    <!-- Open Jobs -->
                                    <path class="stroke-none fill-teal-500" d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                        stroke-dasharray="{{ ($jobsByStatus['open'] / $totalJobs) * 100 }}, 100"
                                        stroke-dashoffset="25" />
                                    <!-- Closed Jobs -->
                                    <path class="stroke-none fill-gray-500" d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                        stroke-dasharray="{{ ($jobsByStatus['closed'] / $totalJobs) * 100 }}, 100"
                                        stroke-dashoffset="{{ 100 - ($jobsByStatus['open'] / $totalJobs) * 100 + 25 }}" />
                                @endif
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center space-x-6 mt-4">
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-teal-500 rounded-full mr-2"></div>
                        <span class="text-sm text-gray-400">Open ({{ $jobsByStatus['open'] }})</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-gray-500 rounded-full mr-2"></div>
                        <span class="text-sm text-gray-400">Closed ({{ $jobsByStatus['closed'] }})</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Recent Applications -->
        <div class="lg:col-span-2 bg-gray-800 rounded-lg border border-gray-700 shadow-md">
            <div class="p-6 border-b border-gray-700">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-bold text-white">Recent Applications</h2>
                    <a href="{{ route('applicans') }}" class="text-sm font-medium text-teal-500 hover:text-teal-400">
                        View all
                    </a>
                </div>
            </div>
            <div class="p-6">
                @forelse ($recentApplications as $application)
                    <div
                        class="flex items-center justify-between py-4 {{ !$loop->last ? 'border-b border-gray-700' : '' }}">
                        <div class="flex items-center space-x-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-teal-400 to-emerald-500 rounded-lg flex items-center justify-center text-white font-bold text-sm">
                                {{ strtoupper(substr($application->user->name ?? 'U', 0, 1)) }}
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-white">{{ $application->user->name }}</h3>
                                <p class="text-xs text-gray-400">Applied for {{ $application->job->title }}
                                    {{ $application->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span
                                class="px-2 py-1 text-xs font-medium rounded-full 
                                @if ($application->status == 'pending') bg-yellow-900 text-yellow-300
                                @elseif($application->status == 'reviewed') bg-blue-900 text-blue-300
                                @elseif($application->status == 'accepted') bg-green-900 text-green-300
                                @elseif($application->status == 'rejected') bg-red-900 text-red-300 @endif">
                                {{ ucfirst($application->status) }}
                            </span>
                            <a href="{{ route('applicans') }}" class="text-gray-400 hover:text-gray-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-8">
                        <svg class="mx-auto h-12 w-12 text-gray-500" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-300">No applications yet</h3>
                        <p class="mt-1 text-sm text-gray-500">Start by creating some job listings.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Popular Jobs -->
        <div class="bg-gray-800 rounded-lg border border-gray-700 shadow-md">
            <div class="p-6 border-b border-gray-700">
                <h2 class="text-lg font-bold text-white">Popular Jobs</h2>
            </div>
            <div class="p-6">
                @forelse ($popularJobs as $job)
                    <div class="py-3 {{ !$loop->last ? 'border-b border-gray-700' : '' }}">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm font-medium text-white">{{ $job->title }}</h3>
                            <span class="text-xs font-medium text-teal-500">{{ $job->applications_count }}
                                applications</span>
                        </div>
                        <div class="flex items-center text-xs text-gray-400 mt-1">
                            <span>{{ $job->department ?? 'No Department' }}</span>
                            <span class="mx-1.5">•</span>
                            <span>{{ ucfirst($job->work_type) }}</span>
                        </div>
                        <div class="mt-2">
                            <div class="w-full bg-gray-700 rounded-full h-1.5">
                                <div class="bg-teal-500 h-1.5 rounded-full"
                                    style="width: {{ $job->applications_count > 0 ? min(($job->applications_count / $popularJobs->max('applications_count')) * 100, 100) : 0 }}%">
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-6">
                        <p class="text-sm text-gray-500">No job applications yet.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Application Trends -->
    <div class="bg-gray-800 rounded-lg border border-gray-700 shadow-md">
        <div class="p-6 border-b border-gray-700">
            <h2 class="text-lg font-bold text-white">Application Trends</h2>
            <p class="text-sm text-gray-400">Last 6 months</p>
        </div>
        <div class="p-6">
            <div class="w-full">
                <div class="grid grid-cols-6 gap-2 mb-2">
                    @foreach ($applicationStats as $stat)
                        <div class="text-center">
                            <span class="text-xs font-medium text-gray-400">{{ $stat['month'] }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="grid grid-cols-6 gap-2 mb-6">
                    @foreach ($applicationStats as $stat)
                        <div class="flex flex-col items-center space-y-1">
                            <div class="relative w-full h-32">
                                @php
                                    $maxValue = collect($applicationStats)->max('total');
                                    $heightPending = $maxValue > 0 ? ($stat['pending'] / $maxValue) * 100 : 0;
                                    $heightAccepted = $maxValue > 0 ? ($stat['accepted'] / $maxValue) * 100 : 0;
                                    $heightRejected = $maxValue > 0 ? ($stat['rejected'] / $maxValue) * 100 : 0;
                                @endphp

                                <!-- Rejected -->
                                <div class="absolute bottom-0 left-0 right-0 bg-red-500 rounded-sm"
                                    style="height: {{ $heightRejected }}%"></div>

                                <!-- Accepted -->
                                <div class="absolute bottom-0 left-0 right-0 bg-green-500 rounded-sm"
                                    style="height: {{ $heightAccepted }}%"></div>

                                <!-- Pending -->
                                <div class="absolute bottom-0 left-0 right-0 bg-yellow-500 rounded-sm"
                                    style="height: {{ $heightPending }}%"></div>
                            </div>
                            <span class="text-xs font-medium text-white">{{ $stat['total'] }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-center space-x-6">
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                        <span class="text-sm text-gray-400">Pending</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                        <span class="text-sm text-gray-400">Accepted</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                        <span class="text-sm text-gray-400">Rejected</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
