<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id'); // Dans la table X on cherche que notre champ Y corresponde à Z
    }

    public function genre(){
        return $this->belongsTo(Genre::class,'id_genre','id');
    }
}
