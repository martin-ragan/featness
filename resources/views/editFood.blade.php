@extends('layouts.admin-panel')

@section('content')
    <adding-food-form :food="{{ json_encode($food) }}"> </adding-food-form>
@endsection
