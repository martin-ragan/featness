<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['breakfastIds', 'lunchIds', 'snackIds', 'dinnerIds'];

    protected $casts = [
        'breakfastIds' => 'array',
        'lunchIds' => 'array',
        'snackIds' => 'array',
        'dinnerIds' => 'array'
    ];

    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
