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

        {{-- <!-- @livewireStyles --> --}}

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <body class="bg-dark-background bg-cover bg-no-repeat">
        <div id="app" class="h-auto xl:h-screen xl:w-screen">
            @section('navbar')
                   <nav class="flex items-center container-fluid mx-auto h-36 xl:h-1/6">
                       <a href="/" class="h-logo" href="">F<span class="text-primary">EAT</span>NESS</a>
                   </nav>
            @show

            <div class="mt-6 container-fluid mx-auto flex h-5/6 py-4 xl:mt-0">
                @yield('content')
            </div>
        </div>
    </body>
</html>
