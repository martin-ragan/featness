<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function generateFoodMenu()
    {
        $user = Auth::user();


        $dailyCalories = $user->daily_calories;
        $breakfastCalories = $dailyCalories / 100 * 25;
        $lunchCalories = $dailyCalories / 100 * 30;
        $snackCalories = $dailyCalories / 100 * 15;
        $dinnerCalories = $dailyCalories / 100 * 30;

        $breakfastIds = $this->generateFood($breakfastCalories, 1);
        $lunchIds = $this->generateFood($lunchCalories, 2);
        $snackIds = $this->generateFood($snackCalories, 3);
        $dinnerIds = $this->generateFood($dinnerCalories, 4);


        $menu = Menu::where('user_id', '=', $user->id)->first();
        $response = [];

        if (!$menu){
            $response = $user->menu()->create(
                [
                    'breakfastIds' => json_encode($breakfastIds),
                    'lunchIds' => json_encode($lunchIds),
                    'snackIds' => json_encode($snackIds),
                    'dinnerIds' => json_encode($dinnerIds)
                ]
            );
        }
        else{
            $user->menu()->update(
                [
                    'breakfastIds' => json_encode($breakfastIds),
                    'lunchIds' => json_encode($lunchIds),
                    'snackIds' => json_encode($snackIds),
                    'dinnerIds' => json_encode($dinnerIds)
                ]
            );
        }
        return $response;

    }

    public function generateFood($calories, $foodType)
    {

        $foods = Food::join('food_types', 'food.food_type_id', '=', 'food_types.id')
            ->where('food_types.id', '=', $foodType)
            ->inRandomOrder()
            ->limit(4)
            ->select('food.*')
            ->get();

        $newFoods = [];

        foreach ($foods as $food){
            $multipleTimes = $calories/$food->kcal;
            $ingredients = $food->ingredients;
            $newIngredients = [];


            foreach ($ingredients as $ingredient){
                $ingredient['amount'] *= $multipleTimes;
                array_push($newIngredients, $ingredient);
            }

            $food = $food->toArray();
            $food['ingredients'] = $newIngredients;

            $food['kcal'] *= $multipleTimes;
            $food['proteins'] *= $multipleTimes;
            $food['carbohydrates'] *= $multipleTimes;
            $food['fats'] *= $multipleTimes;

            array_push($newFoods, $food);
        }

        return array_column($newFoods, 'id');
    }


    public function show(){

        $user = Auth::user();

        $menu = $user->menu;
        if (!$menu) $menu = $this->generateFoodMenu();

        $breakfast = Food::whereIn('id', json_decode($menu->breakfastIds))->get()->toArray();
        $lunch = Food::whereIn('id', json_decode($menu->lunchIds))->get()->toArray();
        $snack = Food::whereIn('id', json_decode($menu->snackIds))->get()->toArray();
        $dinner = Food::whereIn('id', json_decode($menu->dinnerIds))->get()->toArray();

//        dd($breakfast);
        dd($lunch);
//        dd($snack);
//        dd($dinner);
        return view('jedalnicek');
    }
}
