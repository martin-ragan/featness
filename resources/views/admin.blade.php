<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="height=device-height, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src="https://kit.fontawesome.com/c196f76230.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

{{-- <!-- @livewireStyles --> --}}

<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="w-screen h-screen flex items-center justify-center bg-primary">
<!-- component -->
<form method="post" action="/admin-panel" class="bg-white shadow-md rounded w-1/3 px-8 pt-6 pb-8 mb-4 flex flex-col">
    <div class="mb-4">
        <label class="block text-secondary text-sm font-bold mb-2" for="username">
            Meno
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-secondary" id="username" type="text" placeholder="Meno">
    </div>
    <div class="mb-6">
        <label class="block text-secondary text-sm font-bold mb-2" for="password">
            Heslo
        </label>
        <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-secondary mb-3" id="password" type="password" placeholder="******************">
{{--        <p class="text-red text-xs italic">Please choose a password.</p>--}}
    </div>
    <button class="bg-secondary text-white font-bold py-2 px-4 rounded" type="submit">
        Prihlásiť sa
    </button>
</form>
</body>
</html>
