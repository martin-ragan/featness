<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Food;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        Gate::authorize('viewAny');

        return view('admin');
    }

    public function indexFood() {
        Gate::authorize('viewAny');

        return view('adminFood',
            [
                "food" => Food::all()->toArray(),
            ],
        );
    }

    public function createFood(){
        Gate::authorize('viewAny');

        return view('createFood');
    }

    public function storeFood(Request $request) {
        Gate::authorize('viewAny');

        $data = $request->validate([
            'name' => ['required', 'unique']
        ]);

        dd("hou");

        return redirect('/admin/food');
    }

    public function editFood(Food $food){
        Gate::authorize('viewAny');

        return view('editFood',
            [
                "food" => $food->toArray(),
            ],
        );
    }




    public function indexExercises() {
        Gate::authorize('viewAny');

        return view('adminExercises',
            [
                "exercises" => Exercise::with('bodyPart', 'bodySection', 'difficulties', 'areas', 'type')->get()->toArray(),
            ],
        );
    }

    public function createExercise(){
        Gate::authorize('viewAny');

        return view('createExercise');
    }

    public function editExercise($id){
        Gate::authorize('viewAny');

        return view('editFood',
            [
                "food" => Exercise::with('bodySection', 'bodyPart', 'difficulties', 'areas', 'type')->findOrFail($id)->toArray(),
            ],
        );
    }
}
