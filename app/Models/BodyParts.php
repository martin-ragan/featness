<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyParts extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'reps' => 'array'
    ];

    public function exercises(){
        return $this->hasMany(Exercise::class);
    }
}
