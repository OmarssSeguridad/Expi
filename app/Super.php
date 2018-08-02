<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Super extends Authenticatable
{
    //

    use Notifiable;
    protected $fillable = [
        'nombre', 'email', 'password', 'ap', 'am', 'telefono', 'cuenta',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
