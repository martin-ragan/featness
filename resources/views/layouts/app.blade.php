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

    <body class="w-screen h-screen p-0 m-0">
        <div id="app">
            @section('navbar')
               <header class="h-1/6">
                   <nav class="flex items-center container mx-auto h-full">
                       <a href="/" class="text-secondary text-xl" href="">F<span class="font-bold text-primary">EAT</span>NESS</a>
                   </nav>
               </header>
            @show

            <div class="container mx-auto flex items-center justify-center h-5/6">
                @yield('content')
            </div>
        </div>
    </body>
</html>
