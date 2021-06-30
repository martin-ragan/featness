<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('mamau', function () {
//    $array = [
//        [
//            'name' => 'ovsené vločky',
//            'amount' => 15
//        ],
//        [
//            'name' => 'orechy vlašské',
//            'amount' => 4
//        ],
//        [
//            'name' => 'jogurt biely bez smotany',
//            'amount' => 60
//        ],
//        [
//            'name' => 'jahody mrazené',
//            'amount' => 19
//        ],
//        [
//            'name' => 'med',
//            'amount' => 2
//        ]
//    ];
//
//    $json = json_encode($array);
//    dd($json);

    $food = \App\Models\Food::skip(4)->first();
    dd($food->ingredients);
});

Route::get('/', function() {
    return view('welcome');
});

Route::get('/clenstvo', function() {
    return view('membership');
});
Route::get('/kontakt', function() {
    return view('contact');
});
Route::get('/ochrana-osobnych-udajov', function() {
    return view('ochrana-osobnych-udajov');
});
Route::get('/obchodne-podmienky', function() {
    return view('obchodne-podmienky');
});
Route::get('/cookies', function() {
    return view('cookies');
});


// Routes protected for logged users
Route::middleware('auth')->group(function() {
    Route::middleware('isAdmin')->group(function () {

        Route::get('/trening', function() {
            return view('trening');
        });

        Route::get('/jedalnicek', function() {
            return view('jedalnicek');
        });

        Route::post('/generate-training', [ExerciseController::class, 'generateTraining']);


        Route::get('/current-training', [ExerciseController::class, 'currentTraining']);

    });


    Route::middleware('verified')->get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

});

