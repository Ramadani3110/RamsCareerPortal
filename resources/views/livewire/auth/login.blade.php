<div>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                RamsCareer
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Login ke akun anda
                    </h1>

                    <!-- Enhanced error alert for login failure -->
                    @if ($errorMessage)
                        <div id="login-alert"
                            class="flex items-center p-4 mb-4 text-red-800 border-l-4 border-red-500 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800"
                            role="alert">
                            <svg class="flex-shrink-0 w-5 h-5 mr-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                            </svg>
                            <div class="ml-1 text-sm font-medium">
                                {{ $errorMessage }}
                            </div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                                onclick="document.getElementById('login-alert').remove()" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif

                    <form class="space-y-4 md:space-y-6" wire:submit.prevent="login">
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="email"
                                class="bg-gray-50 border text-gray-900 rounded-lg block w-full p-2.5
                dark:bg-gray-700 dark:text-white dark:placeholder-gray-400
                {{ $errors->has('email')
                    ? 'border-red-500 focus:border-red-500 focus:ring-red-500'
                    : 'border-gray-300 focus:border-primary-600 focus:ring-primary-600' }}"
                                placeholder="name@company.com" wire:model="email">
                            @error('email')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" id="password"
                                class="bg-gray-50 border text-gray-900 rounded-lg block w-full p-2.5
                dark:bg-gray-700 dark:text-white dark:placeholder-gray-400
                {{ $errors->has('password')
                    ? 'border-red-500 focus:border-red-500 focus:ring-red-500'
                    : 'border-gray-300 focus:border-primary-600 focus:ring-primary-600' }}"
                                placeholder="••••••••" wire:model="password">
                            @error('password')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox"
                                        class="w-4 h-4 border rounded bg-gray-50
                        {{ $errors->has('remember') ? 'border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-primary-300' }}
                        dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                        wire:model="remember">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Ingat saya</label>
                                </div>
                            </div>
                            <a href="#"
                                class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Lupa
                                password?</a>
                        </div>

                        <button type="submit" wire:loading.attr="disabled" vwire:target="login"  wire:loading.class="cursor-not-allowed"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none
               focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center
               dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 cursor-pointer">
                            Login
                        </button>

                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Belum punya akun?
                            <a href="{{ route('register') }}"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
