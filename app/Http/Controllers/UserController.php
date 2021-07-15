<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function showProfile(User $user)
    {
        $caloriesAte = 0;
        // need to cound how many calories are already eaten
        $eatedFood = $user->eatedFood;

        if ($eatedFood->breakfast_id != null) $caloriesAte += $user->daily_calories * .25;
        if ($eatedFood->lunch_id != null) $caloriesAte += $user->daily_calories * .3;
        if ($eatedFood->snack_id != null) $caloriesAte += $user->daily_calories * .15;
        if ($eatedFood->dinner_id != null) $caloriesAte += $user->daily_calories * .3;

        $user->ate_calories = $caloriesAte;

        return $user;
    }


    public function update(Request $request, User $user) {

        $this->authorize('update', $user);

        $data = $request->validate([
            'height' => ['required', 'integer', 'between:0,300'],
            'weight' => ['required', 'numeric', 'between:0,500'],
            'age' => ['required', 'integer', 'between:0,200'],
            'life_style' => ['required', 'string', 'in:sedavý typ,ľahko aktívny,aktívny,veľmi aktívny'],
            'my_goal' => ['required', 'string', 'in:chcem chudnúť,chcem udržať hmotnosť,chcem pribráť'],
        ]);

        $daily_calories = 447.593 + (9.247 * $data['weight']) + (3.098 * $data['height']) - (4.330 * $data['age']);

        switch ($data['life_style']) {
            case "sedavý typ":
            {
                $daily_calories *= 1.2;
                break;
            }
            case "ľahko aktívny":
            {
                $daily_calories *= 1.375;
                break;
            }
            case "aktívny":
            {
                $daily_calories *= 1.55;
                break;
            }
            case "veľmi aktívny":
            {
                $daily_calories *= 1.725;
                break;
            }
        }

        switch ($data['my_goal']) {
            case "chcem chudnúť":
            {
                $daily_calories -= 300;
                break;
            }
            case "chcem pribrať":
            {
                $daily_calories += 350;
                break;
            }
        }

        $user->update([
            'height' => $data['height'],
            'weight' => $data['weight'],
            'age' => $data['age'],
            'life_style' => $data['life_style'],
            'my_goal' => $data['my_goal'],
            'daily_calories' => $daily_calories,
        ]);

        return redirect('/profile/' . $user->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
