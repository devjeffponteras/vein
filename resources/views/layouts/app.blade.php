<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <!-- Navbar -->
    <x-navbar></x-navbar>

    <!-- Page Content -->
    <main class="grow">

        <!-- Contents -->
        <div class="content-container">
            @yield('content')
        </div>

    </main>

    <!-- Footer -->
    <x-footer></x-footer>

    @stack('scripts')
</body>
</html>