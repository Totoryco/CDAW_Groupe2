<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoiceActor extends Model
{
    use HasFactory;

    protected $table = 'voiceactors';
    protected $guarded = ['id'];
    protected $hidden = [];

    public function character(){
        return $this->belongsTo(Character::class,'character_id','id');
    }
}
