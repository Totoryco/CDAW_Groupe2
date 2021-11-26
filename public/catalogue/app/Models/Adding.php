<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adding extends Model
{
    use HasFactory;

    protected $table = 'addings';
    protected $guarded = ['id'];
    protected $hidden = [];

}
