<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $table = 'episodes';
    protected $guarded = ['id'];
    protected $hidden = [];

    public function viewing(){
        return $this->belongsTo(Viewing::class,'viewing_id','id');
    }

    public function comment(){
        return $this->belongsTo(Comment::class,'comment_id','id');
    }
}
