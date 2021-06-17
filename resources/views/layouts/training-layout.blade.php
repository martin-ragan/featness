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

<body class="bg-light-mobile-background bg-cover bg-no-repeat h-auto sm:h-screen sm:bg-light-background lx:w-screen">
<div id="app" class="h-full w-full">
    @section('navbar')
            <nav class="flex items-center container-fluid mx-auto h-36 xl:h-1/6">
                <a href="/" class="h-logo">F<span class="text-primary">EAT</span>NESS</a>

                <ul class="flex-1 h-full flex items-center justify-end">
                    <li class="p-4">
                        <a class="text-primary text-2xl font-semibold mr-4 tracking-widest" href="">BLOG</a>
                    </li>
                    <li class="">
                        <a href="">
                            <img class="w-20 h-20" src="{{ asset('/images/1.png') }}" alt="">
                        </a>
                    </li>
                    <li class="">
                        <a href="">
                            <img class="w-20 h-20" src="{{ asset('/images/2.png') }}" alt="">
                        </a>
                    </li>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <label for="logout" class="cursor-pointer"><img class="w-20 h-20" src="{{ asset('/images/3.png') }}" alt=""></label>
                        <input type="submit" id="logout" class="hidden">
                    </form>
                </ul>
            </nav>
    @show

    <div class="container-fluid mx-auto flex flex-col items-center justify-center lx:h-5/6">
        @yield('content')
    </div>
</div>

<script src="https://player.vimeo.com/api/player.js%22%3E"></script>
</body>
</html>
