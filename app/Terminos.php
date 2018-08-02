<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terminos extends Model
{
    //

    protected $fillable = [
        'descripcion',
    ];
    protected $table = 'terminos';
}
