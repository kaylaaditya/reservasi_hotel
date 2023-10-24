<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authentificatble;
use Illuminate\Notifications\Notifiable;

class Admin extends Authentificatble
{
    use Notifiable;

    protected $fillable =[
        'name',
        'username',
        'password',
        'role',
    ];

    protected $hidden=[
        'password',
        'remember_token',

    ];
}
