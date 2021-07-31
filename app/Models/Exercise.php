<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'name', 'body_part_id', 'body_section_id', 'type_id'];

    protected $hidden = ['pivot'];

    public $timestamps = false;

    public function bodySection(){
        return $this->belongsTo(BodySection::class);
    }

    public function bodyPart(){
        return $this->belongsTo(BodyParts::class);
    }

    public function difficulties(){
        return $this->belongsToMany(Difficulty::class);
    }

    public function areas(){
        return $this->belongsToMany(Area::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
