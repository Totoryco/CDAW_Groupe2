<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $table = 'playlists';
    protected $guarded = ['id'];
    protected $hidden = [];

    public function adding(){
        return $this->belongsTo(Adding::class,'adding_id','id'); // Dans la table X on cherche que notre champ Y corresponde à Z
    }

    public function savingplaylist(){
        return $this->belongsTo(Saving::class,'saving_id','id'); // Dans la table X on cherche que notre champ Y corresponde à Z
    }
}

