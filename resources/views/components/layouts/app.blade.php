<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-50 dark:bg-gray-900">
   @include('partials.dashboard.navbar')

    <div class="flex pt-16 overflow-hidden">
        <!-- Sidebar -->
        @include('partials.dashboard.sidebar')
        <!-- Main content -->
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <div class="p-4">
                {{ $slot }}
            </div>
            @include('partials.dashboard.footer')
        </div>
    </div>

    @auth
        <livewire:session-timeout>
    @endauth

    <script src="{{ asset('js/flowbite.min.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    @livewireScripts
</body>

</html>
