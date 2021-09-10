@extends('layouts.admin-panel')

@section('content')

    <form class="w-1/2 mx-auto mt-2" action="{{'/admin/exercises/' .$exercise['id']}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="delete" />
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-700 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Odstrániť cvik
        </button>
    </form>

    <form class="w-1/2 mx-auto mt-6" action="{{'/admin/exercises/' .$exercise['id']}}" method="POST">
        <input type="hidden" name="_method" value="put" />
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="flex flex-col">
                    <h1 class="text-primary text-xl">Uprav cvik !</h1>
                    <div class="w-full mt-4">
                        <label for="name" class="block text-sm font-medium text-secondary">Názov cviku</label>
                        <input type="text" name="name" id="name"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                               value="{{$exercise["name"]}}"
                        />
                    </div>

                    <div class="w-full mt-4">
                        <label for="url" class="block text-sm font-medium text-secondary">URL</label>
                        <input type="text" name="url" id="url"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                               value="{{$exercise["url"]}}"
                        />
                    </div>

                    <div class="w-full mt-4">
                        <label for="body_section_id" class="block text-sm font-medium text-secondary">Časť tela</label>
                        <select id="body_section_id" name="body_section_id" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach($body_sections as $key => $body_section)
                                <option value="{{$body_section['id']}}" {{ $body_section === $exercise['body_section'] ? 'selected' : '' }}>{{$body_section['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full mt-4">
                        <label for="body_part_id" class="block text-sm font-medium text-secondary">Partia</label>
                        <select id="body_part_id" name="body_part_id"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach($body_parts as $body_part)
                                <option value="{{$body_part['id']}}" {{ $body_part['name'] === $exercise['body_part']['name'] ? 'selected' : '' }} >{{$body_part['name'] . ($body_part['both_parts'] ? " na kazdu stranu" : "")}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full mt-4">
                        <label for="type_id" class="block text-sm font-medium text-secondary">Typ</label>
                        <select id="type_id" name="type_id" autocomplete="type_id"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach($types as $key => $type)
                                <option value="{{$type['id']}}" {{ $type == $exercise['type'] ? 'selected' : '' }}>{{$type['name']}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full mt-4">
                        <h4 class="block text-sm font-medium text-secondary">Zložitosť</h4>
                        <div class="flex flex-row">
                            @foreach($difficulties as $key => $difficulty)
                                <div class="flex items-center w-1/3">
                                    <input type="checkbox" id="{{$difficulty['name']}}" value="{{$key}}" {{ in_array($difficulty, $exercise['difficulties']) ? 'checked' : '' }} name="difficulty_ids[]">
                                    <label class="ml-4" for="{{$difficulty['name']}}">{{$difficulty['name']}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-full mt-4">
                        <h4 class="block text-sm font-medium text-secondary">Použitie</h4>
                        <div class="flex flex-row">
                            @foreach($areas as $key => $area)
                                <div class="flex items-center w-1/3">
                                    <input type="checkbox" id="{{$area['name']}}" value="{{$key}}" {{ in_array($area, $exercise['areas']) ? 'checked' : '' }} name="area_ids[]">
                                    <label class="ml-4" for="{{$area['name']}}">{{ $area['name'] }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-secondary hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Pridať
                </button>
            </div>
        </div>
    </form>
@endsection
