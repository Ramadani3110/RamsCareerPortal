<div>
    <div class="bg-gradient-to-r from-teal-500 to-emerald-500 p-6 rounded-lg shadow-md mb-8">
        <form wire:submit.prevent="$refresh">
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                <div>
                    <label for="job_title" class="block mb-2 text-sm font-medium text-white">Job
                        Title</label>
                    <input type="text" id="job_title" wire:model.debounce.300ms="search"
                        class="bg-white/90 border border-teal-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5"
                        placeholder="e.g. Web Developer">
                </div>
                <div>
                    <label for="location" class="block mb-2 text-sm font-medium text-white">Location</label>
                    <input type="text" id="location" wire:model.debounce.300ms="location"
                        class="bg-white/90 border border-teal-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5"
                        placeholder="e.g. Jakarta">
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-white">Category</label>
                    <select id="category" wire:model="department"
                        class="bg-white/90 border border-teal-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5">
                        <option selected>All Categories</option>
                        <option value="IT">IT & Software</option>
                        <option value="Design">Design</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Finance">Finance</option>
                        <option value="Education">Education</option>
                    </select>
                </div>
            </div>
            <div class="flex items-center justify-end">
                <button type="submit"
                    class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    Cari Pekerjaan
                </button>
            </div>
        </form>
    </div>

    <!-- Job Listings -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($jobPosts as $job)
            <div
                class="group bg-white rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden flex flex-col h-full relative">
                <!-- Posted Date -->
                <div
                    class="absolute top-3 left-3 text-xs text-gray-500 bg-white/90 px-2.5 py-1 rounded-full shadow-sm backdrop-blur-sm z-10">
                    Posted {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}
                </div>

                <!-- Card Header with Company Logo -->
                <div class="p-5 border-b border-gray-100 pt-12">
                    <div class="flex items-start gap-4">
                        <!-- Company Logo Placeholder -->
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-teal-400 to-emerald-500 rounded-lg flex items-center justify-center text-white font-bold text-lg">
                            {{ strtoupper(substr($job->department ?? 'JOB', 0, 1)) }}
                        </div>

                        <div class="flex-1 min-w-0">
                            <!-- Job Title - Now clickable -->
                            <h5 class="text-lg font-bold tracking-tight text-gray-900 line-clamp-2 group-hover:text-teal-600 transition-colors duration-200">
                                <a href="{{ route('jobs.show', $job->id) }}" class="hover:text-teal-600 transition-colors duration-200">
                                    {{ $job->title }}
                                </a>
                            </h5>

                            <!-- Company & Location -->
                            <div class="flex items-center text-sm text-gray-500 mt-1">
                                <span class="truncate">{{ $job->department ?? 'Company' }}</span>
                                @if ($job->location)
                                    <span class="mx-1.5">•</span>
                                    <span class="truncate">{{ $job->location }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Work Type Badge -->
                    <div class="mt-3">
                        <span
                            class="{{ $job->work_type === 'remote'
                                ? 'bg-emerald-50 text-emerald-700 ring-emerald-600/20'
                                : ($job->work_type === 'hybrid'
                                    ? 'bg-sky-50 text-sky-700 ring-sky-600/20'
                                    : 'bg-amber-50 text-amber-700 ring-amber-600/20') }} 
                                text-xs font-medium px-2.5 py-1 rounded-full ring-1 inline-block">
                            {{ ucfirst($job->work_type) }}
                        </span>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="p-5 flex-1 flex flex-col">
                    <!-- Description -->
                    <p class="text-sm text-gray-600 mb-4 flex-grow">
                        {{ \Illuminate\Support\Str::limit($job->description, 120) }}
                    </p>

                    <!-- Skills -->
                    <div class="mb-4">
                        <p class="text-xs font-medium text-gray-500 mb-2">Skills Required:</p>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach ($job->skills->take(4) as $skill)
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2 py-1 rounded-md">
                                    {{ $skill->name }}
                                </span>
                            @endforeach
                            @if ($job->skills->count() > 4)
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2 py-1 rounded-md">
                                    +{{ $job->skills->count() - 4 }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-gray-100 -mx-5 mb-4"></div>

                    <!-- Footer with Salary and Apply Button -->
                    <div class="flex items-center justify-between mt-auto">
                        <div>
                            <p class="text-xs font-medium text-gray-500">Salary</p>
                            <p class="text-base font-bold text-emerald-600">
                                {{ $job->formatted_salary }}
                            </p>
                        </div>

                        <!-- Apply Now Button - Now links to job detail -->
                        <a href="{{ route('jobs.show', $job->id) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-teal-600 rounded-lg hover:bg-teal-700 focus:ring-4 focus:outline-none focus:ring-teal-300 transition-all duration-200 shadow-sm hover:shadow">
                            Apply Now
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-10">
                <div
                    class="inline-flex justify-center items-center p-4 mb-4 text-sm text-gray-500 bg-gray-100 rounded-full">
                    <svg class="w-6 h-6 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    No results found
                </div>
                <p class="text-gray-500 text-lg mb-4">No job listings found matching your criteria.</p>
                <button wire:click="$set('search', '')"
                    class="text-teal-600 hover:text-teal-800 bg-teal-50 hover:bg-teal-100 px-4 py-2 rounded-lg transition-colors duration-200 font-medium text-sm">
                    Clear search filters
                </button>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-center mt-8">
        {{ $jobPosts->links() }}
    </div>
</div>