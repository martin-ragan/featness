<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'ingredients' => 'array',
        'recipe' => 'array',
    ];

    public function foodType(){
        return $this->belongsTo(FoodType::class);
    }
}
