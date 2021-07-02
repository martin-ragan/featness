<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function generateFoodMenu()
    {
        $user = Auth::user();

        $breakfastIds = $this->generateFood(1);
        $lunchIds = $this->generateFood(2);
        $snackIds = $this->generateFood(3);
        $dinnerIds = $this->generateFood(4);


        return $user->menu()->updateOrCreate(
            [
                'user_id' => $user->id
            ],
            [
                'breakfastIds' => json_encode($breakfastIds),
                'lunchIds' => json_encode($lunchIds),
                'snackIds' => json_encode($snackIds),
                'dinnerIds' => json_encode($dinnerIds)
            ]
        );

    }

    public function generateFood($foodType)
    {
        $foods = Food::join('food_types', 'food.food_type_id', '=', 'food_types.id')
            ->where('food_types.id', '=', $foodType)
            ->inRandomOrder()
            ->limit(4)
            ->select('food.*')
            ->get()
            ->toArray();

        return array_column($foods, 'id');
    }


    public function show()
    {
        $user = Auth::user();

        $dailyCalories = $user->daily_calories;

        $menu = $user->menu;
        if (!$menu) $menu = $this->generateFoodMenu();

        $breakfast = Food::whereIn('id', json_decode($menu->breakfastIds))->get()->toArray();
        $lunch = Food::whereIn('id', json_decode($menu->lunchIds))->get()->toArray();
        $snack = Food::whereIn('id', json_decode($menu->snackIds))->get()->toArray();
        $dinner = Food::whereIn('id', json_decode($menu->dinnerIds))->get()->toArray();

        $breakfast = $this->calculateByCalories($dailyCalories * .25, $breakfast);
        $lunch = $this->calculateByCalories($dailyCalories * .3, $lunch);
        $snack = $this->calculateByCalories($dailyCalories * .15, $snack);
        $dinner = $this->calculateByCalories($dailyCalories * .3, $dinner);

        return view('jedalnicek',
            [
                "breakfast" => $breakfast,
                "lunch" => $lunch,
                "snack" => $snack,
                "dinner" => $dinner
            ]
        );
    }

    public function calculateByCalories($calories, $foods)
    {
        $newFoods = [];

        foreach ($foods as $food) {
            $multipleTimes = $calories / $food['kcal'];
            $ingredients = $food['ingredients'];
            $newIngredients = [];


            foreach ($ingredients as $ingredient) {
                $ingredient['amount'] = round($ingredient['amount'] * $multipleTimes);
                array_push($newIngredients, $ingredient);
            }

            $food['ingredients'] = $newIngredients;

            $food['kcal'] = round($food['kcal'] * $multipleTimes);
            $food['proteins'] = round($food['proteins'] * $multipleTimes);
            $food['carbohydrates'] = round($food['carbohydrates'] * $multipleTimes);
            $food['fats'] = round($food['fats'] * $multipleTimes);

            array_push($newFoods, $food);
        }
        return $newFoods;
    }

    public function generateSpecificFootType(Request $request){

        $data = $request->validate([
            "foodType" => ['required', 'between:1,4', 'integer']
        ]);

        $foodType = $data['foodType'];

        $foodIds = $this->generateFood($foodType);

        $food = Food::whereIn('id', json_decode($foodIds))->get()->toArray();

        $user = Auth::user();

        if ($foodType == 1) $calories = $user->daily_calories * .25;
        else if ($foodType == 2 || $foodType == 4) $calories = $user->daily_calories * .3;
        else if ($foodType == 3) $calories = $user->daily_calories * .15;

        $food = $this->calculateByCalories($calories, $food);

        return $food;

    }
}
