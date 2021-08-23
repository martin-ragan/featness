@extends('layouts.admin-panel')

@section('content')
                    <form class="w-1/2 mx-auto mt-12" action="/exercise" method="POST">
                        @csrf
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="flex flex-col">
                                    <h1 class="text-primary text-xl">Pridaj si cvik !</h1>
                                    <div class="w-full mt-4">
                                        <label for="name" class="block text-sm font-medium text-secondary">Názov cviku</label>
                                        <input type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>

                                    <div class="w-full mt-4">
                                        <label for="url" class="block text-sm font-medium text-secondary">URL</label>
                                        <input type="text" name="url" id="url" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>

                                    <div class="w-full mt-4">
                                        <label for="body_section_id" class="block text-sm font-medium text-secondary">Časť tela</label>
                                        <select id="body_section_id" name="body_section_id" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="1">Horná časť</option>
                                            <option value="2">Spodná časť</option>
                                            <option value="3">Celé telo</option>
                                        </select>
                                    </div>

                                    <div class="w-full mt-4">
                                        <label for="body_part_id" class="block text-sm font-medium text-secondary">Partia</label>
                                        <select id="body_part_id" name="body_part_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="1">Celé nohy</option>
                                            <option value="3">Zadok</option>
                                            <option value="5">Predné stehná</option>
                                            <option value="6">Celý vrch</option>
                                            <option value="7">Horný chrbát</option>
                                            <option value="9">Spodný chrbát</option>
                                            <option value="10">Priame brucho</option>
                                            <option value="12">Šikmé brucho</option>
                                            <option value="13">Krk</option>
                                            <option value="14">Ramená</option>
                                            <option value="15">Zadné stehná</option>
                                        </select>
                                    </div>

                                    <div class="w-full mt-4">
                                        <label for="country" class="block text-sm font-medium text-secondary">Typ</label>
                                        <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>Silový</option>
                                            <option>Statický</option>
                                            <option>Kardio</option>
                                        </select>
                                    </div>

                                    <div class="w-full mt-4">
                                        <h4 class="block text-sm font-medium text-secondary">Zložitosť</h4>
                                        <div class="flex flex-row">
                                            <div class="flex items-center w-1/3">
                                                <input type="checkbox" id="horns" name="horns">
                                                <label class="ml-4" for="horns">Ľahká</label>
                                            </div>
                                            <div class="flex items-center w-1/3">
                                                <input type="checkbox" id="horns" name="horns">
                                                <label class="ml-4" for="horns">Stredná</label>
                                            </div>
                                            <div class="flex items-center w-1/3">
                                                <input type="checkbox" id="horns" name="horns">
                                                <label class="ml-4" for="horns">Ťažká</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full mt-4">
                                        <h4 class="block text-sm font-medium text-secondary">Použitie</h4>
                                        <div class="flex flex-row">
                                            <div class="flex items-center w-1/3">
                                                <input type="checkbox" id="horns" name="horns">
                                                <label class="ml-4" for="horns">Tréning</label>
                                            </div>
                                            <div class="flex items-center w-1/3">
                                                <input type="checkbox" id="horns" name="horns">
                                                <label class="ml-4" for="horns">Rozvička</label>
                                            </div>
                                            <div class="flex items-center w-1/3">
                                                <input type="checkbox" id="horns" name="horns">
                                                <label class="ml-4" for="horns">Strečing</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-secondary hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Pridať
                                </button>
                            </div>
                        </div>
                    </form>
@endsection
