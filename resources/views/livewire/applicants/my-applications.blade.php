<div>
    <div class="p-4 bg-gray-800 border border-gray-700 rounded-lg shadow-sm sm:p-6">
        <div class="items-center justify-between lg:flex">
            <div class="mb-4 lg:mb-0">
                <h3 class="mb-2 text-xl font-bold text-white">My Applications</h3>
                <span class="text-base font-normal text-gray-400">Track the status of your job applications</span>
            </div>
        </div>

        <!-- Search and Filter -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4 mt-4">
            <div>
                <label for="search" class="block mb-2 text-sm font-medium text-gray-300">Search</label>
                <input type="text" id="search" wire:model.debounce.300ms="search"
                    class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5"
                    placeholder="Search by job title or company">
            </div>
            <div>
                <label for="statusFilter" class="block mb-2 text-sm font-medium text-gray-300">Status</label>
                <select id="statusFilter" wire:model="statusFilter"
                    class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5">
                    <option value="">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="reviewed">Reviewed</option>
                    <option value="accepted">Accepted</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>
            <div>
                <label for="perPage" class="block mb-2 text-sm font-medium text-gray-300">Per Page</label>
                <select id="perPage" wire:model="perPage"
                    class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </div>
        </div>

        <!-- Applications Table -->
        <div class="overflow-x-auto mt-6">
            <table class="w-full text-sm text-left text-gray-400">
                <thead class="text-xs text-gray-400 uppercase bg-gray-700">
                    <tr>
                        <th scope="col" class="px-4 py-3">Job Title</th>
                        <th scope="col" class="px-4 py-3">Company</th>
                        <th scope="col" class="px-4 py-3">Location</th>
                        <th scope="col" class="px-4 py-3">Status</th>
                        <th scope="col" class="px-4 py-3">Applied On</th>
                        <th scope="col" class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($applications as $application)
                        <tr class="border-b border-gray-700">
                            <td class="px-4 py-3">
                                <div class="flex items-center">
                                    <div
                                        class="flex-shrink-0 w-8 h-8 bg-gradient-to-br from-teal-400 to-emerald-500 rounded-lg flex items-center justify-center text-white font-bold text-xs mr-3">
                                        {{ strtoupper(substr($application->job->department ?? 'JOB', 0, 1)) }}
                                    </div>
                                    <div>
                                        <p class="font-medium text-white">{{ $application->job->title }}</p>
                                        <p class="text-xs text-gray-400">
                                            {{ $application->job->work_type ? ucfirst($application->job->work_type) : 'Not specified' }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-gray-300">{{ $application->job->department ?? 'Not specified' }}
                            </td>
                            <td class="px-4 py-3 text-gray-300">{{ $application->job->location ?? 'Not specified' }}
                            </td>
                            <td class="px-4 py-3">
                                <span
                                    class="px-2 py-1 text-xs font-medium rounded-full 
                                    @if ($application->status == 'pending') bg-yellow-900 text-yellow-300
                                    @elseif($application->status == 'reviewed') bg-blue-900 text-blue-300
                                    @elseif($application->status == 'accepted') bg-green-900 text-green-300
                                    @elseif($application->status == 'rejected') bg-red-900 text-red-300 @endif">
                                    {{ ucfirst($application->status) }}
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div>
                                    <p class="text-sm text-gray-300">{{ $application->created_at->format('M d, Y') }}
                                    </p>
                                    <p class="text-xs text-gray-500">{{ $application->created_at->diffForHumans() }}</p>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-2">
                                    <a href="{{ route('jobs.show', $application->job->id) }}"
                                        class="font-medium text-teal-500 hover:text-teal-400 text-sm">View Job</a>
                                    @if ($application->cv_path)
                                        <span class="text-gray-600">•</span>
                                        <a href="{{ Storage::url($application->cv_path) }}" target="_blank"
                                            class="font-medium text-blue-500 hover:text-blue-400 text-sm">View CV</a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-6 text-center text-gray-500">
                                You haven't applied to any jobs yet.
                                <div class="mt-2">
                                    <a href="{{ route('jobs-list') }}"
                                        class="font-medium text-teal-500 hover:text-teal-400">Browse available jobs</a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $applications->links() }}
        </div>
    </div>
</div>
