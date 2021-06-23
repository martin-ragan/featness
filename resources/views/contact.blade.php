@extends('layouts.contract')

@section('content')
    <form class="w-full max-w-lg mx-auto h-96 flex flex-col justify-center sm:h-auto sm:py-24">
        <h1 class="text-2xl text-primary tracking-widest uppercase my-6">Opýtaj sa nás na čokoľvek :)</h1>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Meno
                </label>
                <input class="appearance-none block w-full bg-white text-secondary border border-secondary rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jana">
{{--                <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Priezvisko
                </label>
                <input class="appearance-none block w-full bg-white text-secondary border border-secondary rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-last-name" type="text" placeholder="Mrkvičková">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    E-mail
                </label>
                <input class="appearance-none block w-full bg-white text-secondary border border-secondary rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" placeholder="jana.mrkvickova@...">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Tel. číslo
                </label>
                <input class="appearance-none block w-full bg-white text-secondary border border-secondary rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" placeholder="09...">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Správa
                </label>
                <textarea class=" no-resize appearance-none block w-full bg-white text-secondary border border-secondary rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message" placeholder="Dobrý deň, "></textarea>
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3">
                <button class="shadow bg-primary text-white hover:bg-teal-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded" type="button">
                    Poslať
                </button>
            </div>
            <div class="md:w-2/3"></div>
        </div>
    </form>
@endsection
