<?php

namespace App\Http\Controllers;

use App\Contratodetalle;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    //

    public function crea()
    {

        $data = request()->validate([
            'descripcion' => 'required|string',
            'precio'      => 'required|numeric',

        ]);

        Contratodetalle::create([
            'descripcion' => $data['descripcion'],
            'precio'      => $data['precio'],

        ]);

        return 'correcto';

    }

}
