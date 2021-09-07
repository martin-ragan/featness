@extends('layouts.admin-panel')

@section('content')
    <edit-exercise-form :exercise="{{json_encode($exercise)}}"
                        :body_sections="{{json_encode($body_sections)}}"
                        :body_parts="{{json_encode($body_parts)}}"
                        :areas="{{json_encode($areas)}}"
                        :types="{{json_encode($types)}}"
                        :difficulties="{{json_encode($difficulties)}}"
    ></edit-exercise-form>
@endsection
