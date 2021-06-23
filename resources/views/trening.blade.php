@extends('layouts.logged-in')

@section('content')
    <form action="generate-training" method="post" class="flex flex-col w-full items-center justify-center flex-1">
        <h1 class="heading-brown mb-6 text-lg sm:text-2xl">tréning</h1>
        @csrf

        <training-form></training-form>

        <button type="submit" class="btn-brown w-72 mt-12">vytvoriť tréning</button>
        <a href="{{route('dashboard')}}" class="text-primary text-xl tracking-widest uppercase font-bold mt-6"> < naspäť</a>
    </form>
@endsection
