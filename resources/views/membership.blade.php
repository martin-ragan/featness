@extends('layouts.contract')

@section('content')
        <div class="flex flex-col items-center justify-start h-screen w-full">
            <div class="w-full h-1/6">
                <h1 class="heading-brown w-full">7 dní úplne zadarmo</h1>
                <p class="text-xl w-full text-center text-secondary uppercase tracking-widest">kvalitné videá rôznych cvikov priamo k tebe domov!</p>
            </div>
            <div class="flex items-start w-full h-1/2 justify-center">
                <div class="card-dark h-full w-1/4 items-center justify-between">
                    <h2 class="text-4xl text-primary text-left w-full pt-12 pl-12 uppercase">1 mesiac</h2>
                    <h1 class="text-5xl font-bold tracking-widest">6,90€ / <span class="text-2xl font-light">mesiac</span></h1>
                    <div class="flex items-center justify-center h-16 bg-primary rounded-xl w-full">
                        <h1 class="rounded-xl w-full text-white text-center">6,90€</h1>
                    </div>
                </div>
                <div class="card-dark h-full w-1/4 items-center justify-between mx-12">
                    <h2 class="text-4xl text-primary text-left w-full pt-12 pl-12 uppercase">6 mesiacov</h2>
                    <h1 class="text-5xl font-bold tracking-widest">5,90€ / <span class="text-2xl font-light">mesiac</span></h1>
                    <div class="flex items-center justify-center h-16 bg-primary rounded-xl w-full">
                        <h1 class="rounded-xl w-full text-white text-center">35,40€</h1>
                    </div>
                </div>
                <div class="card-dark h-full items-center h-full w-1/4 justify-between relative">
                    <span class="absolute text-white bg-primary z-40 p-3 px-6 text-xl font-bold rounded-md" style="top: -12%;">TOP</span>
                    <div class="border-8 border-primary p-1 rounded-3xl absolute" style="width: 106%; height: 106%; top: -3%;"></div>
                    <h2 class="text-4xl text-primary text-left w-full pt-12 pl-12 uppercase">12 mesiacov</h2>
                    <h1 class="text-5xl font-bold tracking-widest">4,90€ / <span class="text-2xl font-light">mesiac</span></h1>
                    <div class="flex items-center justify-center h-16 bg-primary rounded-xl w-full">
                        <h1 class="rounded-xl w-full text-white text-center">58,80€</h1>
                    </div>
                </div>
            </div>
            <div class="w-full h-1/4 flex flex-col items-center justify-center">
                <p class="text-secondary text-xl uppercase tracking-widest mt-6">14 dní garancia peňazí</p>
                <button class="btn-brown w-1/4">začni 7 dní zdarma</button>
            </div>
        </div>
    {{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}
    {{--            @if (Route::has('login'))--}}
    {{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
    {{--                    @auth--}}
    {{--                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>--}}
    {{--                    @else--}}
    {{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>--}}

    {{--                        @if (Route::has('register'))--}}
    {{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
    {{--                        @endif--}}
    {{--                    @endauth--}}
    {{--                </div>--}}
    {{--            @endif--}}
    {{--        </div>--}}

@endsection
