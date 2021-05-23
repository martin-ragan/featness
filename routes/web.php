<?php

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

Route::get('/ajo', function() {
    $e = \App\Models\Exercise::first();
    $e->bodySection;
    $e->bodyPart;
    $e->type;
    $e->areas;
    $e->difficulties;
    dd($e->toArray());
//    dd(\App\Models\Exercise::with(['bodySection', 'bodyPart', 'type'])->first()->toArray());
//    dd(\App\Models\Exercise::first()->areas()->get()->toArray());
});

Route::get('/current-training', [ExerciseController::class, 'currentTraining']);


Route::get('/', function() {
    return view('welcome');
});

// Routes protected for logged users
Route::middleware('auth')->group(function() {

    Route::get('/trening', function() {
        return view('trening');
    });

    Route::get('/jedalnicek', function() {
        return view('jedalnicek');
    });



    Route::middleware('verified')->get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

});
