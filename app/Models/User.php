<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'email','numberphone', 'password', 'google_id','facebook_id','avatar'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
