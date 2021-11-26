<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';
    protected $guarded = ['id'];
    protected $hidden = [];

    public function author(){
        return $this->belongsTo(Author::class,'author_id','id');
    }

    public function anime(){
        return $this->belongsTo(Anime::class,'anime_id','id');
    }

    public function voiceActor(){
        return $this->belongsTo(Voiceactor::class,'voiceActor_id','id');
    }
}
