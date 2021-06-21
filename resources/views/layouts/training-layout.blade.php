<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src="https://kit.fontawesome.com/c196f76230.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

{{-- <!-- @livewireStyles --> --}}

<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="bg-light-mobile-background bg-cover bg-no-repeat overflow-x-hidden sm:bg-light-background">
        <div id="app">
            <div class="container-fluid flex flex-col h-screen xl:min-h-screen mx-auto">
                @section('navbar')
                    <top-navigation></top-navigation>
                @show
                @yield('content')
            </div>
        </div>
{{--<body class="bg-light-mobile-background bg-cover bg-no-repeat h-auto sm:bg-light-background lx:w-screen">--}}
{{--<div id="app" class="h-screen w-full">--}}
{{--        @section('navbar')--}}
{{--            <div class="container-fluid mx-auto">--}}
{{--                <top-navigation></top-navigation>--}}
{{--            </div>--}}
{{--        @show--}}

{{--    <div class="container-fluid mx-auto h-5/6">--}}
{{--        @yield('content')--}}
{{--    </div>--}}
{{--</div>--}}

<script src="https://player.vimeo.com/api/player.js%22%3E"></script>
</body>
</html>
