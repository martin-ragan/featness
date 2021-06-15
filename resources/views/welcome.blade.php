<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Featness</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://kit.fontawesome.com/c196f76230.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- <!-- @livewireStyles --> --}}

    <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body class="overflow-x-hidden">
        <header class="h-screen w-screen bg-main-page-background bg-cover overflow-hidden">
            <div class="container mx-auto mt-12 h-full">
                <nav class="flex items-center justify-between flex-wrap py-12">
                    <a href="/" class="h-logo text-white font-medium text-5xl">F<span class="text-primary">EAT</span>NESS</a>
                    <div class="block lg:hidden">
                        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                        </button>
                    </div>
                    <div class="w-full block flex-grow lg:flex lg:items-center lg:justify-end lg:w-auto">
                        <a href="#" class="text-white uppercase tracking-widest block font-bold text-2xl lg:inline-block hover:text-white mr-12">
                            Blog
                        </a>
                        <a href="/clenstvo" class="text-white uppercase tracking-widest block font-bold text-2xl lg:inline-block hover:text-white mr-12">
                            Členstvo
                        </a>
                        @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-white uppercase tracking-widest block font-bold text-2xl lg:inline-block hover:text-white">Profil</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-white uppercase tracking-widest block font-bold text-2xl lg:inline-block hover:text-white">
                                        Prihlásiť sa
                                    </a>

{{--                                    @if (Route::has('register'))--}}
{{--                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                                    @endif--}}
                                @endauth
                        @endif
                    </div>
                </nav>
                <div class="flex flex-col w-full h-2/3 items-center justify-end">
                    <div class="bg-primaryBg text-white w-2/3 py-8 px-8 rounded-xl text-center">
                        <h1 class="tracking-widest text-4xl uppercase">Online tréningy a jedálníčky</h1>
                        <h1 class="tracking-widest text-4xl uppercase">Pre teba a tvoju vysnívanú postavu</h1>
                    </div>
                    <div class="w-2/3 mt-12 flex items-center justify-between">
                        <a href="" class="bg-secondaryBg rounded-xl text-white uppercase tracking-widest text-2xl w-1/2 py-6 text-center">Chcem vyskúšať zdarma</a>
                        <a href="" class="bg-secondaryBg rounded-xl text-white uppercase tracking-widest text-2xl w-1/2 py-6 ml-6 text-center">chcem byť členkou</a>
                    </div>
                    <h1 class="text-center text-white text-xl uppercase mt-12">Zaregistruj sa na 7 dní úplne zadarmo</h1>
                    <h1 class="text-center text-white text-xl uppercase">Bez vyplnenia platobných údajov!</h1>
                </div>
                <div class="flex items-center w-full justify-end">
                    <a href="https://www.facebook.com/Featness-108198664817252/" target="_blank"><i class="fab fa-facebook-square text-5xl text-white hover:text-secondary"></i></a>
                    <a href="https://instagram.com/featness_sk?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram text-5xl text-white ml-6 hover:text-secondary"></i></a>
                </div>
            </div>
        </header>

        <footer class="footer bg-white relative pt-1 border-b-2 border-primary">
            <div class="container mx-auto px-6">

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
    </body>
</html>
