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
            <header class="h-1/6">
                <nav class="flex items-center container mx-auto h-full">
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
            </header>
        @show

        <div class="container mx-auto flex flex-col items-center justify-center h-5/6">
            @yield('content')
        </div>
    </div>
</body>
</html>
