<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $casts = [
        'time_easy' => 'array',
        'time_medium' => 'array',
        'time_hard' => 'array',
    ];

    public function exercises(){
        return $this->hasMany(Type::class);
    }
}
