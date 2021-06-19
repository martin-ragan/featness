@extends('layouts.logged-in')

@section('content')
    <h1 class="heading-brown pb-6 text-lg xl:mt-0 sm:mt-5 sm:text-3xl">Ahoj, {{auth()->user()->name}} !</h1>
    <div class="mt-18 flex flex-col h-full w-full justify-center items-center xl:flex-row">
        <choose-box box-name="tréning" to-route="trening"> </choose-box>
        <choose-box class="mt-6 xl:ml-36 xl:mt-0" box-name="jedálniček" to-route="jedalnicek"> </choose-box>
    </div>
@endsection
