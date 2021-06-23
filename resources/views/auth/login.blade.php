@extends('layouts.app')


@section('content')
    <div class="flex flex-col w-full h-full items-center xl:justify-between xl:flex-row">
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
                <label for="remember" class="text-white text-sm">zapamätaj si ma?</label>
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

        <div class="card-dark mt-6 justify-center xl:ml-10 xl:justify-start xl:mt-0">
            <h1 class="mb-4 mt-12 text-3xl">Si tu prvýkrát ?</h1>
            <h2 class="text-primary tracking-widest text-lg uppercase text-center my-3 md:w-1/2 md:text-2xl">Zaregistruj sa na prvých 7 dní úplne zadarmo!</h2>
            <h4 class="text-white text-lg uppercase tracking-widest text-center py-3 md:w-2/5 md:text-xl">Bez zadania údajov z platobnej karty</h4>
            <a class="btn-brown px-12 mt-8 block text-center align-middle" href="{{ route('register') }}">
                Bezplatná registrácia
            </a>
        </div>
    </div>
@endsection
