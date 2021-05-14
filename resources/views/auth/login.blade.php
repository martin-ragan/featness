@extends('layouts.app')


@section('content')
    <form method="POST" action="{{route('login')}}" class="card-dark">
        @csrf

        <h1 class="mb-4 mt-12">Prihlásiť sa</h1>

        <div class="flex border-0 border-b border-white h-16 w-4/5">
            <img src="{{ asset('/images/6.png') }}" alt="" class="input-icon">
            <input class="login-input" type="email" name="email" id="email" placeholder="EMAIL">
        </div>

        <div class="flex border-0 border-b border-white mt-4 h-16 w-4/5">
            <img src="{{ asset('/images/8.png') }}" alt="" class="input-icon">
            <input class="login-input" type="password" name="password" id="password" placeholder="HESLO">
        </div>

        <div class="w-4/5 flex items-center mt-4">
            <input type="checkbox" name="remember" id="remember" class="appearance-none bg-transparent text-primary ml-4 mr-4">
            <label for="remember" class="text-white">zapamätaj si ma?</label>
        </div>

        @if (Route::has('password.request'))
            <a class="text-sm text-white p-4" href="{{ route('password.request') }}">
                Zabudla si heslo ?
            </a>
        @endif
            <button class="btn-brown w-1/2">
                POĎME NA TO!
            </button>
    </form>

    <div class="ml-10 card-dark">
            <h1 class="mb-4 mt-12">Si tu prvýkrát ?</h1>
            <h2 class="text-primary tracking-widest font-medium text-3xl w-1/2 uppercase text-center my-3">Zaregistruj sa na prvých 7 dní úplne zadarmo!</h2>
            <h4 class="text-white text-xl uppercase tracking-widest text-center py-3 w-2/5">Bez zadania údajov z platobnej karty</h4>
            <a class="btn-brown px-12 mt-8" href="{{ route('register') }}">
                    Bezplatná registrácia
            </a>
    </div>
@endsection
