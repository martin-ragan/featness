<x-guest-layout>

    <div class="min-h-screen flex sm:justify-center items-center sm:pt-0 bg-gray-100">
        <x-jet-authentication-card class="h-72">
            <!-- <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot> -->

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <h1 class="text-white text-lg uppercase text-center py-3">Prihlásiť sa</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <!-- <x-jet-label for="email" value="{{ __('Email') }}" /> -->
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" placeholder="{{ __('Email') }}" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <!-- <x-jet-label for="password" value="{{ __('Password') }}" /> -->
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password" />
                </div>

                <!-- <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div> -->

                <div class="flex flex-col items-center justify-center mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Zabudla si heslo ?') }}
                        </a>
                    @endif

                    <x-jet-button class="mt-4 text-center bg-yellow-900 w-52">
                        {{ __('POĎME NA TO') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>

        <x-jet-authentication-card class="ml-4 h-72">
            <h1 class="text-white text-lg uppercase text-center py-3">Si tu prvýkrát ?</h1>
            <h2 class="text-yellow-700 text-lg uppercase text-center py-3">Zaregistruj sa na prvých 7 dní úplne zadarmo!</h2>
            <h4 class="text-white text-lg uppercase text-center py-3">Bez zadania údajov z platobnej karty</h4>
            <a class="px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{ route('register') }}">
                    {{ __('Bezplatná registrácia') }}
            </a>
        </x-jet-authentication-card>
    </div>
</x-guest-layout>
