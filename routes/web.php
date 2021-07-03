<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\FoodController;

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

        Route::post('/generate-training', [ExerciseController::class, 'generateTraining']);

        Route::get('/current-training', [ExerciseController::class, 'currentTraining']);

        Route::get('/jedalnicek', [FoodController::class, 'show']);
        
        Route::post('/generateNewRecipe', [FoodController::class, 'generatenewRecipe']);


        Route::get('/profile', function() {
            return view('profile');
        });

    });


    Route::middleware('verified')->get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

});

