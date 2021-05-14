@extends('layouts.logged-in')

@section('content')
    <h1 class="heading-brown">Ahoj, {{auth()->user()->name}} !</h1>
    <div class="flex h-full w-full justify-center items-center">
        <choose-box box-name="tréning" to-route="trening"> </choose-box>
        <choose-box class="ml-36" box-name="jedálniček" to-route="jedalnicek"> </choose-box>
    </div>
@endsection
