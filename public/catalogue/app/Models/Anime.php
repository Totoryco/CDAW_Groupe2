<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function classification(){
        return $this->belongsTo(Classification::class,'classification_id','id');
    }

    public function writing(){
        return $this->belongsTo(Writing::class,'writing_id','id');
    }

    public function character(){
        return $this->belongsTo(Character::class,'character_id','id');
    }
}
