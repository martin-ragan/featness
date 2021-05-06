<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <style>
    </style>
    <body class="font-sans antialiased">
        <div class="h-screen bg-gray-100">
                <header class="bg-white shadow h-1/6 bg-gray-100">
                    <nav class="w-4/5 mx-auto flex items-center h-full">
                        <a href="/" class="pl-4 text-2xl text-secondary font-semibold">F<span class="text-primary">EAT</span>NESS</a>
                    </nav>
                </header>
                <!-- Page Content -->
                <main class="h-5/6">
                        {{ $slot }}
                </main>
        </div>
    </body>
</html>
