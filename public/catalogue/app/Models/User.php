<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'avatar',
        'pseudo',
        'email',
        'password',
        'location',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // 0 = Guest
    // 1 = User
    // 2 = Modo
    // 3 = Admin
    // 4 = Banned

    public function isGuest ()
    {
        return $this->statusCheck();
    }

    public function isUser ()
    {
        return $this->statusCheck("user");
    }

    public function isModo ()
    {
        return $this->statusCheck("modo");
    }

    public function isAdmin ()
    {
        return $this->statusCheck("admin");
    }

    public function isBanned ()
    {
        return $this->statusCheck("banned");
    }

    protected function statusCheck ($status = "guest")
    {
        return $this->status === $status ? true : false;
    }
}
