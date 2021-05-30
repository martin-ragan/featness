@extends('layouts.training-layout')

@section('content')
    <h1 class="heading-brown text-secondary text-5xl font-bold">tréning</h1>
    <training-component :warm-up="{{$warmUp}}" :training="{{json_encode($training)}}"></training-component>
@endsection
