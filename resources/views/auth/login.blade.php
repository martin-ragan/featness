@extends('layouts.app')


@section('content')
    <form method="POST" action="{{route('login')}}" class="flex flex-col w-2/5 justify-center items-center bg-secondary h-96 rounded-3xl">
        @csrf

        <h1 class="mb-4">Prihlásiť sa</h1>

        <div class="flex border-0 border-b border-white h-16 w-4/5">
            <img src="{{ asset('/images/4.png') }}" alt="" class="w-1/6">
            <input class="flex-1 p-2 text-white block mt-1 w-full bg-transparent border-0 placeholder-white tracking-widest" type="email" name="email" id="email" placeholder="EMAIL">
        </div>

        <div class="flex border-0 border-b border-white mt-4 h-16 w-4/5">
            <img src="{{ asset('/images/5.png') }}" alt="" class="w-1/6">
            <input class="flex-1 p-2 block mt-1 w-full bg-transparent text-white border-0 tracking-widest placeholder-white" type="password" name="password" id="password" placeholder="HESLO">
        </div>

        <div class="w-4/5 flex items-center mt-4">
            <input type="checkbox" name="remember" id="remember" class="appearance-none bg-transparent text-primary ml-4 mr-4">
            <label for="remember" class="text-white">zapamätaj si ma?</label>
        </div>

        @if (Route::has('password.request'))
            <a class="underline text-sm text-white p-4" href="{{ route('password.request') }}">
                Zabudla si heslo ?
            </a>
        @endif
            <button class="btn-brown w-2/3">
                POĎME NA TO
            </button>
    </form>

    <div class="classic ml-5 flex flex-col justify-start items-center bg-secondary w-2/5 h-96 rounded-3xl">
            <h1 class="pt-12 mb-4">Si tu prvýkrát ?</h1>
            <h2 class="text-primary text-lg w-2/5 uppercase text-center py-3">Zaregistruj sa na prvých 7 dní úplne zadarmo!</h2>
            <h4 class="text-white text-sm uppercase text-center py-3 w-2/5">Bez zadania údajov z platobnej karty</h4>
            <a class="btn-brown" href="{{ route('register') }}">
                    Bezplatná registrácia
            </a>
    </div>
@endsection
