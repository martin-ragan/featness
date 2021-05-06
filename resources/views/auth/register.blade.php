@extends('layouts.app')


@section('content')

    <form method="POST" action="{{ route('register') }}" class="h-full flex flex-col justify-center items-center">
                @csrf
        
        <h1 class="w-full text-center text-primary uppercase font-bold text-2xl pb-8 tracking-widest">Vytvor si účet</h1>
        
        <div class="flex flex-row justify-center w-full">
            <div class="flex flex-col justify-start items-center bg-secondary w-2/5 h-96 rounded-3xl">
                <!-- <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot> -->

                    {{-- <x-jet-validation-errors class="mb-4" /> --}}

                    <div class="flex border-0 border-b border-white h-16 mt-4 w-4/5">
                        <img src="{{ asset('/images/2.png') }}" alt="" class="w-1/6">
                        {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                        <input id="name" class="flex-1 p-2 text-white block mt-1 w-full bg-transparent border-0 placeholder-white tracking-widest" type="text" name="name" :value="old('name')" placeholder="MENO" required autofocus autocomplete="name" />
                    </div>

                    <div class="flex border-0 border-b border-white h-16 mt-4 w-4/5">
                        <img src="{{ asset('/images/2.png') }}" alt="" class="w-1/6">
                        {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                        <input id="surname" class="flex-1 p-2 text-white block w-full mt-1 bg-transparent border-0 placeholder-white tracking-widest" type="text" name="surname" :value="old('surname')" placeholder="PRIEZVISKO" required autofocus autocomplete="surname" />
                    </div>

                    <div class="flex border-0 border-b border-white h-16 mt-4 w-4/5">
                        <img src="{{ asset('/images/4.png') }}" alt="" class="w-1/6">
                        <!-- <x-jet-label for="email" value="{{ __('Email') }}" /> -->
                        <input id="email" class="flex-1 p-2 text-white block mt-1 w-full bg-transparent border-0 placeholder-white tracking-widest" type="email" name="email" placeholder="EMAIL" :value="old('email')" required />
                    </div>

                    <div class="flex border-0 border-b border-white h-16 mt-4 w-4/5">
                        <img src="{{ asset('/images/5.png') }}" alt="" class="w-1/6">
                        <!-- <x-jet-label for="email" value="{{ __('Email') }}" /> -->
                        <input id="password" class="flex-1 p-2 text-white block mt-1 w-full bg-transparent border-0 placeholder-white tracking-widest" type="password" name="password" required autocomplete="new-password" placeholder="HESLO" />
                    </div>

                    <div class="flex p-4 pl-6 items-center">
                        <input type="checkbox" name="" id="" class="appearance-none bg-transparent text-primary mr-2">
                        <x-jet-label for="email" value="{{ __('suhlásim s obchodnými podmienkami') }}" />
                    </div>

                    
                    
                    

                    <!-- <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div> -->

                    {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif --}}
    <!-- 
                    <div class="flex items-center justify-end mt-4">
                        {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}"> --}}
                            {{-- {{ __('Already registered?') }} --}}
                        </a>
                    </div> -->
                </div>

                <div class="ml-5 flex flex-col bg-secondary w-2/5 h-96 rounded-3xl p-7">
                    <div class="flex flex-row">
                        <div class="flex flex-row h-16 w-auto items-center justify-center border-b border-white">
                            <label class="text-white uppercase" for="height">výška</label>
                            <button class="h-full text-primary font-semibold text-3xl ml-5">-</button>
                            <input class="bg-transparent text-white text-center w-16 border-0 placeholder-white" type="text" name="height" id="height" placeholder="cm">
                            <button class="h-full text-primary font-semibold text-3xl">+</button>
                        </div>
                        <div class="flex flex-row h-16 w-auto items-center justify-center border-b border-white ml-5">
                            <label class="text-white uppercase" for="height">výška</label>
                            <button class="h-full text-primary font-semibold text-3xl ml-5">-</button>
                            <input class="bg-transparent text-white text-center w-16 border-0 placeholder-white" type="text" name="height" id="height" placeholder="cm">
                            <button class="h-full text-primary font-semibold text-3xl">+</button>
                        </div>
                    </div>

                    <div class="flex flex-row h-16 w-auto items-center justify-center border-b border-white ml-5">
                        <label class="text-white uppercase" for="height">výška</label>
                        <button class="h-full text-primary font-semibold text-3xl ml-5">-</button>
                        <input class="bg-transparent text-white text-center w-16 border-0 placeholder-white" type="text" name="height" id="height" placeholder="cm">
                        <button class="h-full text-primary font-semibold text-3xl">+</button>
                    </div>

                    <select name="pets" id="pet-select" class="bg-transparent border-0 uppercase text-white after:text-white">
                        <option value="">Životný štýl</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="hamster">Hamster</option>
                    </select>

                </div>
        </div>
            
        <x-jet-button class="mt-8 w-72">
                        {{ __('HOTOVO!') }}
        </x-jet-button>
    </form>
@endsection
