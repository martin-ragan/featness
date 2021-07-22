<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Food;
use App\Models\FoodType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        Gate::authorize('viewAny');

        return view('admin');
    }

    public function indexFood()
    {
        Gate::authorize('viewAny');

        return view('adminFood',
            [
                "food" => Food::all()->toArray(),
            ],
        );
    }

    public function createFood()
    {
        Gate::authorize('viewAny');

        return view('createFood');
    }

    public function storeFood(Request $request)
    {
        Gate::authorize('viewAny');

        $data = $request->validate([
            'name' => ['required', 'unique:food,name', 'max:255'],
            'ingredients' => ['required', 'array', 'min:1'],
            'recipe' => ['required', 'array', 'min:1'],
            'kcal' => ['required', 'integer', 'min:1', 'max:500'],
            'proteins' => ['required', 'integer', 'min:0', 'max:100'],
            'carbohydrates' => ['required', 'integer', 'min:0', 'max:100'],
            'fats' => ['required', 'integer', 'min:0', 'max:100'],
            'food_type_id' => ['required', 'between:1,4', 'integer']
        ]);

//        $fakeFood = [
//            'name' => 'sulance s tvarohom a makom',
//            'ingredients' => [
//            [
//                "name" => "ovsené vločky",
//                "amount" => 15
//            ],
//            [
//                "name" => "orechy vlašské",
//                "amount" => 4
//            ]
//        ],
//            'recipe' => [
//                    "1. Do misky pridáme banán, vajíčka a rozmixujeme ponorným mixérom.",
//                    "2. Rozohrejeme panvicu a pridáme iba toľko olivového oleja, aby sa lievance nepripaľovali."
//                ],
//            'kcal' => 150,
//            'proteins' => 10,
//            'carbohydrates' => 20,
//            'fats' => 30,
//            'food_type_id' => 2
//        ];


//        dd($fakeFood);


//        $createdFood = Food::create($fakeFood);
//
//        $createdFood = $createdFood->toArray();
//        dd($createdFood);

        Food::create($data);

        return redirect('/admin/food');
    }

    public function editFood(Food $food)
    {
        Gate::authorize('viewAny');

        return view('editFood',
            [
                "food" => $food->toArray(),
            ],
        );
    }

    public function updateFood(Food $food, Request $request)
    {
        Gate::authorize('viewAny');

        $data = $request->validate([
            'name' => ['max:255'],
            'ingredients' => ['array', 'min:1'],
            'recipe' => ['array', 'min:1'],
            'kcal' => ['integer', 'min:1', 'max:500'],
            'proteins' => ['integer', 'min:0', 'max:100'],
            'carbohydrates' => ['integer', 'min:0', 'max:100'],
            'fats' => ['integer', 'min:0', 'max:100'],
            'food_type_id' => ['between:1,4', 'integer']
        ]);


//        $fakeFood = [
//            'name' => 'sulance s tvarohom a makom',
//            'ingredients' => [
//            [
//                "name" => "ovsené vločky",
//                "amount" => 15
//            ],
//            [
//                "name" => "orechy vlašské",
//                "amount" => 4
//            ]
//        ],
//            'recipe' => [
//                    "1. Do misky pridáme banán, vajíčka a rozmixujeme ponorným mixérom.",
//                    "2. Rozohrejeme panvicu a pridáme iba toľko olivového oleja, aby sa lievance nepripaľovali."
//                ],
//            'kcal' => 150,
//            'proteins' => 10,
//            'carbohydrates' => 20,
//            'fats' => 30,
//            'food_type_id' => 2
//        ];

//        dd($fakeFood);

//        $res = $food->update($fakeFood);

//        dd($res);

        $food->update($data);


        return redirect('/admin/food');
    }

    public function destroyFood(Food $food){
        Gate::authorize('viewAny');

        $food->delete();

        return redirect('/admin/food');
    }


    public function indexExercises()
    {
        Gate::authorize('viewAny');

        return view('adminExercises',
            [
                "exercises" => Exercise::with('bodyPart', 'bodySection', 'difficulties', 'areas', 'type')->get()->toArray(),
            ],
        );
    }

    public function createExercise()
    {
        Gate::authorize('viewAny');

        return view('createExercise');
    }

    public function editExercise($id)
    {
        Gate::authorize('viewAny');

        return view('editFood',
            [
                "food" => Exercise::with('bodySection', 'bodyPart', 'difficulties', 'areas', 'type')->findOrFail($id)->toArray(),
            ],
        );
    }
}
