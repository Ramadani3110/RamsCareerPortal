<!-- resources/views/jobs/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pekerjaan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-50">
    
    @include('partials.public.navbar')
    
    @yield('content')

    @include('partials.public.footer')    

    @auth
        <livewire:session-timeout>
    @endauth

    @livewireScripts
    <!-- Flowbite JS -->
    <script src="{{ asset('js/flowbite.min.js') }}"></script>
</body>

</html>
