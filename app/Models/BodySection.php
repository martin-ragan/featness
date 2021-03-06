<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodySection extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function exercises(){
        return $this->hasMany(Exercise::class);
    }
}
