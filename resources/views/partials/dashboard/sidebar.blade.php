<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-screen pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">

                    <li>
                        <a href="{{ url('dashboard') }}"
                            class="flex items-center p-2 text-base rounded-lg group relative overflow-hidden transition-all duration-200 ease-in-out
                {{ Request::segment(1) == 'dashboard'
                    ? 'bg-blue-50 text-blue-700 font-medium dark:bg-gray-800 dark:text-blue-400 border-l-4 border-blue-600 pl-[calc(0.5rem-2px)]'
                    : 'text-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 border-l-4 border-transparent' }}">

                            <!-- Active state indicator -->
                            <span
                                class="absolute left-0 top-0 h-full w-1 bg-blue-600 dark:bg-blue-400 transform transition-transform duration-300 ease-out
                    {{ Request::segment(1) == 'dashboard' ? 'translate-x-0' : '-translate-x-full' }}"></span>

                            <svg class="w-6 h-6 transition-all duration-200 ease-in-out
                    {{ Request::segment(1) == 'dashboard'
                        ? 'text-blue-600 dark:text-blue-400'
                        : 'text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' }}"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3" sidebar-toggle-item="">Dashboard</span>

                            <!-- Subtle glow effect for active item -->
                            <span
                                class="absolute inset-0 rounded-lg bg-blue-600/5 opacity-0 transition-opacity duration-300
                    {{ Request::segment(1) == 'dashboard' ? 'opacity-100' : '' }}"></span>
                        </a>
                    </li>

                    @if (Auth::user()->role == 'admin')
                        <li>
                            <a href="{{ url('skils') }}"
                                class="flex items-center p-2 text-base rounded-lg group relative overflow-hidden transition-all duration-200 ease-in-out
                {{ Request::segment(1) == 'skils'
                    ? 'bg-blue-50 text-blue-700 font-medium dark:bg-gray-800 dark:text-blue-400 border-l-4 border-blue-600 pl-[calc(0.5rem-2px)]'
                    : 'text-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 border-l-4 border-transparent' }}">

                                <!-- Active state indicator -->
                                <span
                                    class="absolute left-0 top-0 h-full w-1 bg-blue-600 dark:bg-blue-400 transform transition-transform duration-300 ease-out
                    {{ Request::segment(1) == 'skils' ? 'translate-x-0' : '-translate-x-full' }}"></span>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 transition-all duration-200 ease-in-out
                    {{ Request::segment(1) == 'skils'
                        ? 'text-blue-600 dark:text-blue-400'
                        : 'text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                                </svg>
                                <span class="ml-3" sidebar-toggle-item="">Job Skills</span>

                                <!-- Subtle glow effect for active item -->
                                <span
                                    class="absolute inset-0 rounded-lg bg-blue-600/5 opacity-0 transition-opacity duration-300
                    {{ Request::segment(1) == 'skils' ? 'opacity-100' : '' }}"></span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('jobs') }}"
                                class="flex items-center p-2 text-base rounded-lg group relative overflow-hidden transition-all duration-200 ease-in-out
                {{ Request::segment(1) == 'jobs'
                    ? 'bg-blue-50 text-blue-700 font-medium dark:bg-gray-800 dark:text-blue-400 border-l-4 border-blue-600 pl-[calc(0.5rem-2px)]'
                    : 'text-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 border-l-4 border-transparent' }}">

                                <!-- Active state indicator -->
                                <span
                                    class="absolute left-0 top-0 h-full w-1 bg-blue-600 dark:bg-blue-400 transform transition-transform duration-300 ease-out
                    {{ Request::segment(1) == 'jobs' ? 'translate-x-0' : '-translate-x-full' }}"></span>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6"
                                    class="w-6 h-6 transition-all duration-200 ease-in-out
                    {{ Request::segment(1) == 'jobs'
                        ? 'text-blue-600 dark:text-blue-400'
                        : 'text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                </svg>

                                <span class="ml-3" sidebar-toggle-item="">Jobs Post</span>

                                <!-- Subtle glow effect for active item -->
                                <span
                                    class="absolute inset-0 rounded-lg bg-blue-600/5 opacity-0 transition-opacity duration-300
                    {{ Request::segment(1) == 'jobs' ? 'opacity-100' : '' }}"></span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('applicans') }}"
                                class="flex items-center p-2 text-base rounded-lg group relative overflow-hidden transition-all duration-200 ease-in-out
                {{ Request::segment(1) == 'applicans'
                    ? 'bg-blue-50 text-blue-700 font-medium dark:bg-gray-800 dark:text-blue-400 border-l-4 border-blue-600 pl-[calc(0.5rem-2px)]'
                    : 'text-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 border-l-4 border-transparent' }}">

                                <!-- Active state indicator -->
                                <span
                                    class="absolute left-0 top-0 h-full w-1 bg-blue-600 dark:bg-blue-400 transform transition-transform duration-300 ease-out
                    {{ Request::segment(1) == 'applicans' ? 'translate-x-0' : '-translate-x-full' }}"></span>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6"
                                    class="w-6 h-6 transition-all duration-200 ease-in-out
                    {{ Request::segment(1) == 'my-applications'
                        ? 'text-blue-600 dark:text-blue-400'
                        : 'text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                                </svg>

                                <span class="ml-3" sidebar-toggle-item="">Applicans</span>

                                <!-- Subtle glow effect for active item -->
                                <span
                                    class="absolute inset-0 rounded-lg bg-blue-600/5 opacity-0 transition-opacity duration-300
                    {{ Request::segment(1) == 'applicans' ? 'opacity-100' : '' }}"></span>
                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->role == 'applicant')
                        <li>
                            <a href="{{ url('my-applications') }}"
                                class="flex items-center p-2 text-base rounded-lg group relative overflow-hidden transition-all duration-200 ease-in-out
                {{ Request::segment(1) == 'my-applications'
                    ? 'bg-blue-50 text-blue-700 font-medium dark:bg-gray-800 dark:text-blue-400 border-l-4 border-blue-600 pl-[calc(0.5rem-2px)]'
                    : 'text-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 border-l-4 border-transparent' }}">

                                <!-- Active state indicator -->
                                <span
                                    class="absolute left-0 top-0 h-full w-1 bg-blue-600 dark:bg-blue-400 transform transition-transform duration-300 ease-out
                    {{ Request::segment(1) == 'my-applications' ? 'translate-x-0' : '-translate-x-full' }}"></span>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6"
                                    class="w-6 h-6 transition-all duration-200 ease-in-out
                    {{ Request::segment(1) == 'my-applications'
                        ? 'text-blue-600 dark:text-blue-400'
                        : 'text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                                </svg>


                                <span class="ml-3" sidebar-toggle-item="">Applicans</span>

                                <!-- Subtle glow effect for active item -->
                                <span
                                    class="absolute inset-0 rounded-lg bg-blue-600/5 opacity-0 transition-opacity duration-300
                    {{ Request::segment(1) == 'my-applications' ? 'opacity-100' : '' }}"></span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</aside>

<!-- Mobile sidebar backdrop -->
<div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
