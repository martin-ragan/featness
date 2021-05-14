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

    <body class="h-screen container mx-auto bg-dark-background bg-cover bg-no-repeat">
        <div id="app" class="h-full w-full">
            @section('navbar')
               <header class="h-1/6 w-full">
                   <nav class="flex items-center container mx-auto h-full w-full">
                       <a href="/" class="h-logo" href="">F<span class="text-primary">EAT</span>NESS</a>
                   </nav>
               </header>
            @show

            <div class="container mx-auto flex items-center justify-center h-5/6">
                @yield('content')
            </div>
        </div>
    </body>
</html>
