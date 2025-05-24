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
                        Buat Akun
                    </h1>
                    <form wire:submit.prevent="register" class="space-y-4 md:space-y-6">

                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" id="name" wire:model.defer="name"
                                class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5
            focus:ring-primary-600 focus:border-primary-600
            dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white
            dark:focus:ring-blue-500 dark:focus:border-blue-500 border
            {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }}"
                                placeholder="John Doe" autocomplete="name" />
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="email" wire:model.defer="email"
                                class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5
            focus:ring-primary-600 focus:border-primary-600
            dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white
            dark:focus:ring-blue-500 dark:focus:border-blue-500 border
            {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}"
                                placeholder="name@company.com" autocomplete="email" />
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" id="password" wire:model.defer="password"
                                class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5
            focus:ring-primary-600 focus:border-primary-600
            dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white
            dark:focus:ring-blue-500 dark:focus:border-blue-500 border
            {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }}"
                                placeholder="••••••••" autocomplete="new-password" />
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password_confirmation"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi
                                Password</label>
                            <input type="password" id="password_confirmation" wire:model.defer="password_confirmation"
                                class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5
            focus:ring-primary-600 focus:border-primary-600
            dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white
            dark:focus:ring-blue-500 dark:focus:border-blue-500 border
            {{ $errors->has('password_confirmation') ? 'border-red-500' : 'border-gray-300' }}"
                                placeholder="••••••••" autocomplete="new-password" />
                            @error('password_confirmation')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300
        font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Register
                        </button>

                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Sudah punya akun?
                            <a href="{{ route('login') }}"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
