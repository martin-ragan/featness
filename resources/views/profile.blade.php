@extends('layouts.logged-in')

@section('content')
    <form action="" class="flex flex-col justify-between items-center">
        <div class="mt-6 card-dark px-0 py-8 xl:ml-10 xl:mt-0">
            <div class="flex flex-col justify-start w-4/5 sm:flex-row">

                <div class="register-input-holder w-full">
                    <label class="input-label" for="height">výška</label>
                    <div class="h-full flex items-center">
                        <input type="number" class="register-input" name="height" id="height">
                        <span class="text-white mr-4">cm</span>
                    </div>
                </div>

                <div class="register-input-holder w-full sm:ml-12">
                    <label class="input-label" for="weight">váha</label>
                    <div class="h-full flex items-center">
                        <input class="register-input" type="number" name="weight" id="weight">
                        <span class="text-white mr-4">kg</span>
                    </div>
                </div>

            </div>

            <select name="life_style" id="life_style" class="register-select">
                <option value="">Životný štýl</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="hamster">Hamster</option>
            </select>

            <select name="my_goal" id="my_goal" class="register-select">
                <option value="">Môj cieľ</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="hamster">Hamster</option>
            </select>
            <button class="btn-brown">
                Uložiť
            </button>
        </div>
        <div class="card-dark-without-prop">

        </div>
    </form>
@endsection
