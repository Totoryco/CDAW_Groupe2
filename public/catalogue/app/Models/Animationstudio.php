<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animationstudio extends Model
{
    use HasFactory;

    protected $table = 'animationstudios';
    protected $guarded = ['id'];
    protected $hidden = [];
}
