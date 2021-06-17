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

<body class="overflow-x-hidden">
<div id="app" class="h-full w-full">
    @section('navbar')
        <header class="h-1/6 w-screen">
            <div class="container-fluid mx-auto mt-12 h-full">
                <nav class="flex items-center justify-between h-full flex-wrap">
                    <a href="/" class="h-logo text-secondary font-medium text-5xl">F<span class="text-primary">EAT</span>NESS</a>
                    <div class="block lg:hidden">
                        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                        </button>
                    </div>
                    <div class="w-full block flex-grow lg:flex lg:items-center lg:justify-end lg:w-auto">
                        <a href="#" class="text-secondary uppercase tracking-widest block font-bold text-2xl lg:inline-block hover:text-primary mr-12">
                            Blog
                        </a>
                        <a href="/clenstvo" class="text-secondary uppercase tracking-widest block font-bold text-2xl lg:inline-block hover:text-primary mr-12">
                            Členstvo
                        </a>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-secondary uppercase tracking-widest block font-bold text-2xl lg:inline-block hover:text-primary">Profil</a>
                            @else
                                <a href="{{ route('login') }}" class="text-secondary uppercase tracking-widest block font-bold text-2xl lg:inline-block hover:text-primary">
                                    Prihlásiť sa
                                </a>

                                {{--                                    @if (Route::has('register'))--}}
                                {{--                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
                                {{--                                    @endif--}}
                            @endauth
                        @endif
                    </div>
                </nav>
            </div>
        </header>
    @show

    <div class="container mx-auto mt-12 h-full h-5/6">
        @yield('content')
    </div>

    @section('footer')
            <footer class="footer bg-white relative pt-1 border-b-2 border-primary">
                <div class="container-fluid mx-auto px-6">

                    <div class="sm:flex sm:mt-8">
                        <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                            <div class="flex flex-col">
                                <span class="font-bold text-gray-700 uppercase mb-2">Podpora</span>
                                <span class="my-2"><a href="/kontakt" class="text-primary text-md hover:text-secondary">Kontaktujte nás</a></span>
                                <span class="my-2"><a href="/ochrana-osobnych-udajov" class="text-primary text-md hover:text-secondary">Ochrana osobných údajov</a></span>
                                <span class="my-2"><a href="/obchodne-podmienky" class="text-primary text-md hover:text-secondary">Obchodné podmienky</a></span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Footer header 2</span>
                                <span class="my-2"><a href="#" class="text-primary text-md hover:text-secondary">link 1</a></span>
                                <span class="my-2"><a href="#" class="text-primary text-md hover:text-secondary">link 1</a></span>
                                <span class="my-2"><a href="#" class="text-primary text-md hover:text-secondary">link 1</a></span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Footer header 3</span>
                                <span class="my-2"><a href="#" class="text-primary text-md hover:text-secondary">link 1</a></span>
                                <span class="my-2"><a href="#" class="text-primary text-md hover:text-secondary">link 1</a></span>
                                <span class="my-2"><a href="#" class="text-primary text-md hover:text-secondary">link 1</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto px-6">
                    <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                        <div class="sm:w-2/3 text-center py-6">
                            <p class="text-sm text-secondary font-bold mb-2">
                                © 2021 by Martin Ragan & Marek Horvath
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        @show
</div>
</body>
</html>
