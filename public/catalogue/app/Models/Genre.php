<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genres';
    protected $guarded = ['id'];
    protected $hidden = [];

    public function classification(){
        return $this->belongsTo(Classification::class,'classification_id','id');
    }
}
