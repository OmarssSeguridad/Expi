<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    //

    protected $fillable = [
        'fechainicio',
        'fechafin',
        'tiempobase',
        'tarifabase',
        'tarifatiempoagregado',
        'tiempoagrado',
        'tiempodegraci',
        'estado',
        'idser',
    ];

}
