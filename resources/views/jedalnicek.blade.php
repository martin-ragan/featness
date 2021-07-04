@extends('layouts.logged-in')

@section('content')
    <h1 class="heading-brown">jedálníček</h1>
    <meal-carousel
            :breakfast="{{json_encode($breakfast)}}"
            :snack="{{json_encode($snack)}}"
            :lunch="{{json_encode($lunch)}}"
            :dinner="{{json_encode($dinner)}}">
    </meal-carousel>
@endsection
