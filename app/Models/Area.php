<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $hidden = ['pivot'];

    public $timestamps = false;

    public function exercises(){
        return $this->belongsToMany(Exercise::class);
    }
}
