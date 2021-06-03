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

Route::get('/aho', function() {
//    $res = \Illuminate\Support\Facades\DB::table('exercises')
//        ->select('exercises.*')
//        ->addSelect(\Illuminate\Support\Facades\DB::raw("'fakeValue' as fakeColumn"))
//        ->get();
//    dd($res);

//    $e = DB::table('exercises')
//        ->join('difficulty_exercise', 'exercises.id', '=', 'difficulty_exercise.exercise_id')
//        ->join('difficulties', 'difficulty_exercise.difficulty_id', '=', 'difficulties.id')
//        ->where('difficulties.name', '=', 'Ľahký')
//        ->join('area_exercise', 'exercises.id', '=', 'area_exercise.exercise_id')
//        ->join('areas', 'area_exercise.area_id', '=', 'areas.id')
//        ->where('areas.name', '=', 'Tréning')
//        ->join('body_parts', 'exercises.body_part_id', '=', 'body_parts.id')
//        ->where('body_parts.name', '=', 'Zadok')
//        ->select('exercises.*', 'body_parts.reps_easy')
//        ->inRandomOrder()
//        ->first();
//    $j = json_decode($e->reps_easy);
////    dd($j);
//    $random_number = rand(0, count($j)-1);
//    $e->reps = $j[$random_number];
//
//
////        $e[0]->name = "jou";
//    dd($e);

    $res = DB::table('exercises')
        ->join('types', 'exercises.type_id', '=', 'types.id')
        ->select('exercises.*', 'types.time_easy')
        ->where('types.name', '=', 'Statický')
//        ->addSelect(\Illuminate\Support\Facades\DB::raw("'fakeValue' as fakeColumn"))
        ->get();
    dd($res);

});

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

    Route::post('/generate-training', [ExerciseController::class, 'generateTraining']);


    Route::get('/current-training', [ExerciseController::class, 'currentTraining']);


    Route::middleware('verified')->get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

});

