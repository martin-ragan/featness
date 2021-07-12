@extends('layouts.logged-in')

@section('content')
    <form action="" class="flex flex-col justify-between items-center h-full">
        <h1 class="text-primary">Profil</h1>
        <div class="flex flex-col items-center flex-1 justify-between space-y-3 w-full xl:flex-row xl:space-y-0">
            <div class="card-dark xl:w-12/25">
                <h1>Telestné údaje</h1>
                <div class="flex flex-col space-y-4 w-4/5">

                    <div class="register-input-holder w-full">
                        <label class="input-label" for="height">výška</label>
                        <div class="h-full flex flex-1 items-end">
                            <input type="text" class="register-input flex-1" name="height" id="height">
                            <span class="text-white">cm</span>
                        </div>
                    </div>

                    <div class="register-input-holder w-full">
                        <label class="input-label" for="weight">váha</label>
                        <div class="h-full flex flex-1 items-end">
                            <input class="register-input flex-1" type="text" name="weight" id="weight">
                            <span class="text-white">kg</span>
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
            <div class="card-dark items-center justify-evenly xl:w-12/25">
                <h1>Moje úspechy</h1>
                <div class="flex flex-col justify-center items-center w-4/5 sm:flex-row sm:justify-between">
                    <progress-ring :progress="50"></progress-ring>
                    <div class="flex flex-col w-2/3 justify-between">
                        <h1 class="text-lg text-primary text-center sm:text-left md:text-2xl">Celkovo Kcal</h1>
                        <h2 class="text-lg text-white text-center sm:text-left md:text-2xl">1800/2000</h2>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center mt-4 w-4/5 sm:flex-row sm:justify-between">
                    <svg width="134" height="134">
                        <circle cx="68" cy="68" r="40" fill="#C18E60" />
                        <text x="50%" y="50%" text-anchor="middle" fill="rgba(40, 60, 80, 0.85)" font-size="40px" dy=".3em">1</text>
                    </svg>
                    <h1 class="text-center text-lg w-2/3 text-primary md:text-2xl md:text-left">Celkovo odcvičené tréningy</h1>
                </div>
            </div>
        </div>
    </form>
@endsection
