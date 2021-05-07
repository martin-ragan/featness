@extends('layouts.app')


{{-- @section('navbar')
    @parent
@endsection --}}

@section('content')
    <form method="POST" action="{{ route('login') }}" class="flex flex-col w-2/5 justify-center items-center bg-secondary h-96 rounded-3xl">
        @csrf

        <h1 class="text-2xl text-white uppercase tracking-widest mb-4">Prihlásiť sa</h1>

        <div class="flex border-0 border-b border-white h-16 w-4/5">
            <img src="{{ asset('/images/4.png') }}" alt="" class="w-1/6">
            <input class="flex-1 p-2 text-white block mt-1 w-full bg-transparent border-0 placeholder-white tracking-widest" type="email" name="email" id="email" placeholder="EMAIL">
        </div>

        <div class="flex border-0 border-b border-white mt-4 h-16 w-4/5">
            <img src="{{ asset('/images/5.png') }}" alt="" class="w-1/6">
            <input class="flex-1 p-2 block mt-1 w-full bg-transparent text-white border-0 tracking-widest placeholder-white" type="password" name="password" id="password" placeholder="HESLO">
        </div>

        @if (Route::has('password.request'))
            <a class="underline text-sm text-white p-4" href="{{ route('password.request') }}">
                {{ __('Zabudla si heslo ?') }}
            </a>
        @endif
            <button class="px-4 py-2 bg-primary border border-transparent w-2/3 font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                {{ __('POĎME NA TO') }}
            </button>
    </form>

    <div class="classic ml-5 flex flex-col justify-start items-center bg-secondary w-2/5 h-96 rounded-3xl">
            <h1 class="text-2xl pt-12 text-white uppercase tracking-widest mb-4">Si tu prvýkrát ?</h1>
            <h2 class="text-primary text-lg w-2/5 uppercase text-center py-3">Zaregistruj sa na prvých 7 dní úplne zadarmo!</h2>
            <h4 class="text-white text-sm uppercase text-center py-3 w-2/5">Bez zadania údajov z platobnej karty</h4>
            <a class="text-center px-4 py-2 mt-4 bg-primary border border-transparent font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{ route('register') }}">
                    {{ __('Bezplatná registrácia') }}
            </a>
    </div>
@endsection
{{-- <x-guest-layout>

    <div class="h-full flex justify-center items-center sm:pt-0 bg-gray-100">

        <x-jet-authentication-card>
            <!-- <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot> -->

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <h1 class="text-white text-xl uppercase text-center py-3 tracking-widest">Prihlásiť sa</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="flex border-0 border-b border-white h-16">
                    <img src="{{ asset('/images/4.png') }}" alt="" class="w-1/6">
                    <!-- <x-jet-label for="email" value="{{ __('Email') }}" /> -->
                    <x-jet-input id="email" class="flex-1 p-2 block mt-1 w-full" type="email" placeholder="{{ __('Email') }}" name="email" :value="old('email')" required/>
                </div>

                <div class="flex border-0 border-b border-white mt-4 h-16">
                    <img src="{{ asset('/images/5.png') }}" alt="" class="w-1/6">
                    <!-- <x-jet-label for="email" value="{{ __('Email') }}" /> -->
                    <x-jet-input id="password" class="flex-1 p-2 block mt-1 w-full" type="password" name="password" placeholder="{{ __('Heslo') }}" required autocomplete="current-password" />
                </div>

                <!-- <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div> -->

                <div class="flex flex-col items-center justify-center mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Zabudla si heslo ?') }}
                        </a>
                    @endif

                    <x-jet-button class="mt-4 text-center bg-yellow-900 w-52">
                        {{ __('POĎME NA TO') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>

        <x-jet-authentication-card class="ml-5">
            <h1 class="text-white text-xl uppercase text-center py-3 tracking-widest">Si tu prvýkrát ?</h1>
            <h2 class="text-yellow-700 text-lg uppercase text-center py-3">Zaregistruj sa na prvých 7 dní úplne zadarmo!</h2>
            <h4 class="text-white text-sm uppercase text-center py-3">Bez zadania údajov z platobnej karty</h4>
            <a class="px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{ route('register') }}">
                    {{ __('Bezplatná registrácia') }}
            </a>
        </x-jet-authentication-card>
    </div>
</x-guest-layout> --}}
