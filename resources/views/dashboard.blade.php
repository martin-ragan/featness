@extends('layouts.logged-in')

@section('content')
    <div class="flex flex-col items-center w-full h-vh-large">
        <h1 class="heading-brown text-lg xl:mt-0 sm:mt-5 sm:text-3xl">Ahoj, {{auth()->user()->name}} !</h1>
        <div class="flex flex-1 flex-col justify-center space-y-4 w-full items-center xl:flex-row xl:space-y-0 xl:space-x-12">
            <choose-box box-name="tréning" to-route="trening"> </choose-box>
            <choose-box box-name="jedálniček" to-route="jedalnicek"> </choose-box>
        </div>
    </div>
@endsection
