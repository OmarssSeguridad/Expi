<?php

namespace App\Http\Controllers;

use App\Terminos;

class TerminosController extends Controller
{
    //

    public function crea()
    {

        $data = request()->validate([
            'descripcion' => 'required|string',
        ]);

        Terminos::create(['descripcion' => $data['descripcion'],
        ]);

        return 'correcto';
    }
}
