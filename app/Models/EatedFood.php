<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EatedFood extends Model
{
    use HasFactory;
    protected $fillable = ['breakfastCalories', 'lunchCalories', 'snackCalories', 'dinnerCalories'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
