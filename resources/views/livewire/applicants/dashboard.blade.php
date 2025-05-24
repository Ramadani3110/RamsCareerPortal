<div class="space-y-6">
    <!-- Welcome Section -->
    <div class="bg-gradient-to-r from-teal-800 to-emerald-800 rounded-xl p-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold mb-2">Welcome back, {{ Auth::user()->name }}!</h1>
                <p class="text-teal-100">Track your job applications and discover new opportunities</p>
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
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Applications -->
        <div class="bg-gray-800 rounded-xl border border-gray-700 shadow-md p-6">
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

        <!-- Pending Applications -->
        <div class="bg-gray-800 rounded-xl border border-gray-700 shadow-md p-6">
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
                    <p class="text-sm font-medium text-gray-400">Pending</p>
                    <p class="text-2xl font-bold text-white">{{ $pendingApplications }}</p>
                </div>
            </div>
        </div>

        <!-- Accepted Applications -->
        <div class="bg-gray-800 rounded-xl border border-gray-700 shadow-md p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-green-900 bg-opacity-50 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-400">Accepted</p>
                    <p class="text-2xl font-bold text-white">{{ $acceptedApplications }}</p>
                </div>
            </div>
        </div>

        <!-- Rejected Applications -->
        <div class="bg-gray-800 rounded-xl border border-gray-700 shadow-md p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-red-900 bg-opacity-50 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-400">Rejected</p>
                    <p class="text-2xl font-bold text-white">{{ $rejectedApplications }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Recent Applications -->
        <div class="lg:col-span-2">
            <div class="bg-gray-800 rounded-xl border border-gray-700 shadow-md">
                <div class="p-6 border-b border-gray-700">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-bold text-white">Recent Applications</h2>
                        <a href="{{ route('my-applications') }}"
                            class="text-sm font-medium text-teal-500 hover:text-teal-400">
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
                                    {{ strtoupper(substr($application->job->department ?? 'JOB', 0, 1)) }}
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-white">{{ $application->job->title }}</h3>
                                    <p class="text-xs text-gray-400">{{ $application->job->department ?? 'Company' }} •
                                        Applied {{ $application->created_at->diffForHumans() }}</p>
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
                                <a href="{{ route('jobs.show', $application->job->id) }}"
                                    class="text-gray-400 hover:text-gray-300">
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
                            <p class="mt-1 text-sm text-gray-500">Start by browsing available job positions.</p>
                            <div class="mt-6">
                                <a href="{{ route('jobs-list') }}"
                                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 focus:ring-offset-gray-800">
                                    Browse Jobs
                                </a>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Application Activity Chart & Quick Actions -->
        <div class="space-y-6">
            <!-- Application Activity -->
            <div class="bg-gray-800 rounded-xl border border-gray-700 shadow-md">
                <div class="p-6 border-b border-gray-700">
                    <h2 class="text-lg font-bold text-white">Application Activity</h2>
                    <p class="text-sm text-gray-400">Last 6 months</p>
                </div>
                <div class="p-6">
                    <div class="space-y-3">
                        @foreach ($applicationStats as $stat)
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-medium text-gray-400">{{ $stat['month'] }}</span>
                                <div class="flex items-center space-x-2">
                                    <div class="w-20 bg-gray-700 rounded-full h-2">
                                        <div class="bg-teal-500 h-2 rounded-full"
                                            style="width: {{ $stat['count'] > 0 ? min(($stat['count'] / max(array_column($applicationStats, 'count'))) * 100, 100) : 0 }}%">
                                        </div>
                                    </div>
                                    <span
                                        class="text-xs font-medium text-gray-300 w-6 text-right">{{ $stat['count'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-gray-800 rounded-xl border border-gray-700 shadow-md">
                <div class="p-6 border-b border-gray-700">
                    <h2 class="text-lg font-bold text-white">Quick Actions</h2>
                </div>
                <div class="p-6 space-y-3">
                    <a href="{{ route('jobs-list') }}"
                        class="flex items-center p-3 text-sm font-medium text-gray-300 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Browse Jobs
                    </a>
                    <a href="{{ route('my-applications') }}"
                        class="flex items-center p-3 text-sm font-medium text-gray-300 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        My Applications
                    </a>
                    <a href="#"
                        class="flex items-center p-3 text-sm font-medium text-gray-300 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Update Profile
                    </a>
                    <a href="#"
                        class="flex items-center p-3 text-sm font-medium text-gray-300 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-5 5v-5zM4 19h10a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        Upload CV
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Application Status Overview -->
    @if ($totalApplications > 0)
        <div class="bg-gray-800 rounded-xl border border-gray-700 shadow-md">
            <div class="p-6 border-b border-gray-700">
                <h2 class="text-lg font-bold text-white">Application Status Overview</h2>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-500">{{ $totalApplications }}</div>
                        <div class="text-sm text-gray-400">Total</div>
                        <div class="w-full bg-gray-700 rounded-full h-2 mt-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
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
    @endif
</div>
