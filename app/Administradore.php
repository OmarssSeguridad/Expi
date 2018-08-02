<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Administradore extends Authenticatable
{

//
    use Notifiable;
    protected $fillable = [
        'nombre', 'email', 'password', 'ap', 'am', 'telefono', 'notarjeta', 'cp', 'mm', 'aa', 'cvv',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

}
