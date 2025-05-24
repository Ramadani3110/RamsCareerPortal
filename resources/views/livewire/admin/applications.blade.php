<div>
    @if (session()->has('message'))
        <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
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

    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="items-center justify-between lg:flex">
            <div class="mb-4 lg:mb-0">
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Applications</h3>
                <span class="text-base font-normal text-gray-500 dark:text-gray-400">Manage all job applications</span>
            </div>
        </div>
        
        <!-- Search and Filter -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4 mt-4">
            <div>
                <label for="search" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Search</label>
                <input type="text" id="search" wire:model.debounce.300ms="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by name, email or job title">
            </div>
            <div>
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                <select id="status" wire:model="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">All</option>
                    <option value="pending">Pending</option>
                    <option value="reviewed">Reviewed</option>
                    <option value="accepted">Accepted</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>
            <div>
                <label for="perPage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Per Page</label>
                <select id="perPage" wire:model="perPage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>
        
        <!-- Applications Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">Applicant</th>
                        <th scope="col" class="px-4 py-3">Job Title</th>
                        <th scope="col" class="px-4 py-3">CV</th>
                        <th scope="col" class="px-4 py-3">Portfolio</th>
                        <th scope="col" class="px-4 py-3">Status</th>
                        <th scope="col" class="px-4 py-3">Applied On</th>
                        <th scope="col" class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($applications as $application)
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900">
                                            <span class="font-medium text-blue-800 dark:text-blue-300">{{ substr($application->user->name, 0, 1) }}</span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900 dark:text-white">{{ $application->user->name }}</p>
                                        <p class="text-xs">{{ $application->user->email }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">{{ $application->job->title }}</td>
                            <td class="px-4 py-3">
                                <a href="{{ Storage::url($application->cv_path) }}" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View CV</a>
                            </td>
                            <td class="px-4 py-3">
                                @if ($application->portfolio_path)
                                    <a href="{{ $application->portfolio_path }}" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Portfolio</a>
                                @else
                                    <span class="text-gray-400">Not provided</span>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 text-xs font-medium rounded-full 
                                    @if($application->status == 'pending') bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300
                                    @elseif($application->status == 'reviewed') bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300
                                    @elseif($application->status == 'accepted') bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300
                                    @elseif($application->status == 'rejected') bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300
                                    @endif">
                                    {{ ucfirst($application->status) }}
                                </span>
                            </td>
                            <td class="px-4 py-3">{{ $application->created_at->format('M d, Y') }}</td>
                            <td class="px-4 py-3">
                                <button id="application-{{ $application->id }}-dropdown-button" data-dropdown-toggle="application-{{ $application->id }}-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    </svg>
                                </button>
                                <div id="application-{{ $application->id }}-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="application-{{ $application->id }}-dropdown-button">
                                        <li>
                                            <button wire:click="updateStatus({{ $application->id }}, 'pending')" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full text-left {{ $application->status == 'pending' ? 'bg-gray-100 dark:bg-gray-600' : '' }}">Mark as Pending</button>
                                        </li>
                                        <li>
                                            <button wire:click="updateStatus({{ $application->id }}, 'reviewed')" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full text-left {{ $application->status == 'reviewed' ? 'bg-gray-100 dark:bg-gray-600' : '' }}">Mark as Reviewed</button>
                                        </li>
                                        <li>
                                            <button wire:click="updateStatus({{ $application->id }}, 'accepted')" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full text-left {{ $application->status == 'accepted' ? 'bg-gray-100 dark:bg-gray-600' : '' }}">Accept Application</button>
                                        </li>
                                        <li>
                                            <button wire:click="updateStatus({{ $application->id }}, 'rejected')" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full text-left {{ $application->status == 'rejected' ? 'bg-gray-100 dark:bg-gray-600' : '' }}">Reject Application</button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-6 text-center text-gray-500 dark:text-gray-400">
                                No applications found.
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
