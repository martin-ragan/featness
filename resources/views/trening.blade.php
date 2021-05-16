@extends('layouts.logged-in')

@section('content')
    <h1 class="heading-brown">tréning</h1>
    <form action="" class="flex flex-col w-full items-center">
        <div class="flex w-full justify-center items-center">

            <div class="card-dark w-1/3 justify-center items-center">
                <h1 class="heading-brown text-xl mt-12">čo chceš dnes cvičiť ?</h1>
                <div class="flex flex-col flex-1 w-full h-4/5 items-center">
                    <div class="checkbox-holder">
                        <input type="radio" name="body-part" id="upper-body" class="appearance-none bg-transparent text-primary ml-4 mr-4">
                        <label for="upper-body" class="text-white">vrchná časť tela</label>
                    </div>
                    <div class="checkbox-holder">
                        <input type="radio" name="body-part" id="lower-body" class="appearance-none bg-transparent text-primary ml-4 mr-4">
                        <label for="lower-body" class="text-white">spodná časť tela</label>
                    </div>
                    <div class="checkbox-holder">
                        <input type="radio" name="body-part" id="whole-body" class="appearance-none bg-transparent text-primary ml-4 mr-4">
                        <label for="whole-body" class="text-white">celé telo</label>
                    </div>
                </div>
            </div>

            <div class="card-dark w-1/3 mx-24 justify-center">
                <h1 class="heading-brown text-xl mt-12">ako chceš dnes cvičiť ?</h1>
                <div class="flex flex-col flex-1 w-full h-4/5 items-center">

                    <div class="checkbox-holder">
                        <input type="radio" name="difficulty" id="upper-body" class="appearance-none bg-transparent text-primary ml-4 mr-4">
                        <label for="upper-body" class="text-white">ľahký tréning</label>
                    </div>
                    <div class="checkbox-holder">
                        <input type="radio" name="difficulty" id="lower-body" class="appearance-none bg-transparent text-primary ml-4 mr-4">
                        <label for="lower-body" class="text-white">pokročilý tréning</label>
                    </div>
                    <div class="checkbox-holder">
                        <input type="radio" name="difficulty" id="whole-body" class="appearance-none bg-transparent text-primary ml-4 mr-4">
                        <label for="whole-body" class="text-white">ťažký tréning</label>
                    </div>
                </div>
            </div>

            <div class="card-dark w-1/3 justify-center">
                <h1 class="heading-brown text-xl mt-12">ako dlho chceš dnes cvičiť ?</h1>

                <div class="flex flex-col flex-1 w-full h-4/5 items-center">
                    <div class="checkbox-holder">
                        <input type="radio" name="training-time" id="upper-body" class="appearance-none bg-transparent text-primary ml-4 mr-4">
                        <label for="upper-body" class="text-white">45 minút</label>
                    </div>
                    <div class="checkbox-holder">
                        <input type="radio" name="training-time" id="lower-body" class="appearance-none bg-transparent text-primary ml-4 mr-4">
                        <label for="lower-body" class="text-white">60 minút</label>
                    </div>
                </div>
            </div>

        </div>

        <button class="btn-brown w-72 mt-12">vytvoriť tréning</button>
        <a href="{{route('dashboard')}}" class="text-primary text-xl tracking-widest uppercase font-bold mt-6"> < naspäť</a>
    </form>
@endsection
