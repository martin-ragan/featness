@extends('layouts.logged-in')

@section('content')
    <form action="" class="flex flex-col items-center h-full flex-1">
        <h1 class="text-primary">Nastavenia</h1>
        <div class="flex flex-col-reverse items-center flex-1 justify-center gap-y-2 w-full xl:flex-row xl:gap-y-0">
            <div class="card-dark px-4">
                <h1>Možné zmeny</h1>
                <input type="text" class="border-0 border-b border-white bg-transparent w-2/4 mt-12 placeholder-white" name="height" id="height" placeholder="Nový email">
                <button class="btn-brown w-full sm:w-2/4">
                    Zmena emailu
                </button>
                <button class="btn-brown w-full sm:w-2/4">
                    Zmena členstva
                </button>
                <button class="btn-brown w-full sm:w-2/4">
                    Resetovať heslo
                </button>
            </div>
        </div>
    </form>
@endsection
