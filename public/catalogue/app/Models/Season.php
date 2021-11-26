<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $table = 'seasons';
    protected $guarded = ['id'];
    protected $hidden = [];

    public function episode(){
        return $this->belongsTo(Episode::class,'episode_id','id'); // Dans la table X on cherche que notre champ Y corresponde à Z
    }
}
