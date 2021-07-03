<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'height' => ['required', 'integer', 'between:0,300'],
            'weight' => ['required', 'numeric', 'between:0,500'],
            'age' => ['required', 'integer', 'between:0,200'],
            'life_style' => ['required', 'string', 'in:sedavý typ,ľahko aktívny,aktívny,veľmi aktívny'],
            'my_goal' => ['required', 'string', 'in:chcem chudnúť,chcem udržať hmotnosť,chcem pribráť'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'surname' => $input['surname'],
            'email' => $input['email'],
            'height' => $input['height'],
            'weight' => $input['weight'],
            'age' => $input['age'],
            'life_style' => $input['life_style'],
            'my_goal' => $input['my_goal'],
            'password' => Hash::make($input['password']),
            'active_until' => now()->addDays(7),
        ]);
    }
}
