<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <main class="bg-gray-50 dark:bg-gray-900">

        <livewire:auth.register />

    </main>

    @livewireScripts
    <script src="{{ asset('js/flowbite.min.js') }}"></script>
</body>

</html>
