<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/clenstvo', function () {
    return view('membership');
});
Route::get('/kontakt', function () {
    return view('contact');
});
Route::get('/ochrana-osobnych-udajov', function () {
    return view('ochrana-osobnych-udajov');
});
Route::get('/obchodne-podmienky', function () {
    return view('obchodne-podmienky');
});
Route::get('/cookies', function () {
    return view('cookies');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
});


// Routes protected for logged users
Route::middleware('auth')->group(function () {
    Route::middleware('isAdmin')->group(function () {

        Route::get('/trening', function () {
            return view('trening');
        });

        Route::post('/generate-training', [ExerciseController::class, 'generateTraining']);

        Route::get('/current-training', [ExerciseController::class, 'currentTraining']);

        Route::post('/finished-training', [ExerciseController::class, 'finishedTraining']);


        Route::get('/jedalnicek', [FoodController::class, 'show']);

        Route::post('/generateNewRecipe', [FoodController::class, 'generateNewRecipe']);

        Route::post('/toggleEatedFood', [FoodController::class, 'toggleEatedFood']);


        Route::get('/profile/{user}', [UserController::class, 'showProfile']);

        Route::post('/profileupdate/{user}', [UserController::class, 'update']);


        Route::get('/profile', [UserController::class, 'showProfile']);

    });


    Route::middleware('verified')->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    // path for admin panel
    Route::middleware('isAdmin')->group(function () {
        Route::prefix('admin')->group(function () {

            // main admin dashboard
            Route::get('/admin-dashboard', [AdminController::class, 'index']);

            // view of admin foods-editing
            Route::get('/food', [AdminController::class, 'indexFood']);
            Route::get('/food/create', [AdminController::class, 'createFood']);
            Route::post('/food', [AdminController::class, 'storeFood']);
            //testing route
//            Route::get('/foode', [AdminController::class, 'storeFood']);
            Route::get('/food/{food}/edit', [AdminController::class, 'editFood']);
            Route::put('/food/{food}', [AdminController::class, 'updateFood']);
            //testing route
//            Route::get('/foode/{food}', [AdminController::class, 'updateFood']);
            Route::delete('/food/{food}', [AdminController::class, 'destroyFood']);
            //testing route
//            Route::get('/foode/{food}', [AdminController::class, 'destroyFood']);


            // routes for admin panel exercises
            Route::get('/exercises', [AdminController::class, 'indexExercises']);
            Route::get('/exercises/create', [AdminController::class, 'createExercise']);
            Route::post('/exercises', [AdminController::class, 'storeExercise']);
            //testing route
//            Route::get('/exercisese', [AdminController::class, 'storeExercise']);
            Route::get('/exercises/{exercise}/edit', [AdminController::class, 'editExercise']);
            Route::put('/exercises/{exercise}', [AdminController::class, 'updateExercise']);
            //testing route
//            Route::get('/exercisese/{exercise}', [AdminController::class, 'updateExercise']);
            Route::delete('/exercises/{exercise}', [AdminController::class, 'destroyExercise']);
            //testing route
            Route::get('/exercisese/{exercise}', [AdminController::class, 'destroyExercise']);

        });
    });

});

