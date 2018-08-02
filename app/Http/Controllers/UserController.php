<?php

namespace App\Http\Controllers;

use App\Administradore;
use App\Usuario;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function listarAdmin()
    {

        $admins = DB::table('administradores')->get();
        $admins = Administradore::all();

        $title = 'Administradores';

        return view('asignacontrato', compact('title', 'admins'));

    }

    public function listarUusarios()
    {

        $admins = DB::table('usuarios')->get();
        $admins = usuario::all();
        $title  = 'Usuarios';

        return view('asignacontrato', compact('title', 'admins'));

    }

    public function asignacontrato($idadmin)
    {

        $admin = Administradore::where('idadmin', '=', $idadmin)->get()->first();

        if ($admin == null) {

            return 'no no';

        }

        $title = 'Administradores';

        return view('contratos', compact('title', 'admin'));

    }

}
