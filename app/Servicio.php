<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    //

    protected $fillable = [
        'idcontrato', 'idadmin', 'notarjeta', 'cuenta', 'horarioabre', 'horariofin', 'nombreestacionamiento', 'estadoservicio', 'estadoservi', 'longitud', 'latitud', 'calificacion', 'cp', 'aa', 'cvv', 'mm',
    ];

}
