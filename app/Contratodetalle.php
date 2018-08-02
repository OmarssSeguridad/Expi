<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratodetalle extends Model
{
    //

    protected $fillable = [
        'descripcion', 'fechadecreacion', 'precio',
    ];
}
