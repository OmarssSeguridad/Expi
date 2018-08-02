<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 'fechainicio', 'fechaaceptacion', 'fechatermino', 'fechalimpago', 'fechacorte',
        'preciototal', 'estadocontrato', 'estadocontratoAdmin', 'descripcion', 'idAdmin', 'idcontratodetalles',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
