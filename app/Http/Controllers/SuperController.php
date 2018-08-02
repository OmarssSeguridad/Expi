<?php

namespace App\Http\Controllers;

use App\Super;
use App\User;
use Illuminate\Support\Facades\Hash;

class SuperController extends Controller
{
    //

    public function crea()
    {

        $data = request()->validate([
            'nombre'   => 'required|string|max:255',
            'ap'       => 'required|string|max:255',
            'am'       => 'required|string|max:255',
            'telefono' => 'required|numeric|max:9999999999',
            'email'    => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'cuenta'   => 'required|',

        ]);
        User::create([
            'name'     => $data['nombre'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'tipo'     => '1',
        ]);

        Super::create([
            'email'    => $data['email'],
            'nombre'   => $data['nombre'],
            'ap'       => $data['ap'],
            'am'       => $data['am'],
            'telefono' => $data['telefono'],
            'cuenta'   => $data['cuenta'],

        ]);

        return 'correcto';

    }

}
