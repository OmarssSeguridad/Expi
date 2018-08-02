<?php

namespace App\Http\Controllers;

use App\Administradore;
use App\Contrato;
use App\contratodetalle;
use App\Http\Controllers\Controller;
use App\Servicio;
use App\Tarifa;
use App\User;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ServicioController extends Controller
{
    //

    public function servicio()
    {

        $fechaactual = new DateTime();

        $data = request()->validate([
            'nombre'    => 'required|string|max:255',
            'ap'        => 'required|string|max:255',
            'am'        => 'required|string|max:255',
            'telefono'  => 'required|numeric|max:9999999999',
            'email'     => 'required|string|email|max:50|unique:users',
            'password'  => 'required|string|min:6|confirmed',
            'cuenta'    => 'required|',
            'nombree'   => 'required|string',
            'notarjeta' => 'required|numeric',
            'horaa'     => 'required|',
            'horac'     => 'required|',
            'cp'        => 'required|numeric|',
            'mm'        => 'required|numeric|',
            'aa'        => 'required|numeric|',
            'cvv'       => 'required|numeric|',

        ]);

/*   if($data['horaa'] < $data['horac']]){

/*         if ($admin == null) {

if de terminos y condiciones no encontrado
}/@19.2824462,-99.5024865,17z

 */

        User::create([
            'name'     => $data['nombre'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'tipo'     => '2',
        ]);

        Administradore::create([
            'email'    => $data['email'],
            'nombre'   => $data['nombre'],
            'ap'       => $data['ap'],
            'am'       => $data['am'],
            'telefono' => $data['telefono'],
        ]);

        $admin = Administradore::where('email', '=', $data['email'])->get()->first();

        $price = DB::table('contratodetalles')->max('idcontratodetalles');

        $con = contratodetalle::where('idcontratodetalles', '=', $price)->get()->first();

        $fechaactual = new DateTime();
/*Carbon::*/

        Contrato::create(
            [
                'fechainicio'         => $fechaactual,
                'fechaaceptacion'     => $fechaactual,
                'fechatermino'        => $fechaactual,
                'fechalimpago'        => $fechaactual,
                'fechacorte'          => $fechaactual,
                'preciototal'         => $con->precio,
                'estadocontrato'      => '0',
                'estadocontratoAdmin' => '0',
                'idAdmin'             => $admin->idadmin,
                'idcontratodetalles'  => $price,

            ]
        );

        $contrato = Contrato::where('idAdmin', '=', $admin->idadmin)->get()->first();

        Servicio::create([
            'idcontrato'            => $contrato['idcontrato'],
            'idadmin'               => $admin->idadmin,
            'notarjeta'             => $data['notarjeta'],
            'cuenta'                => $data['cuenta'],
            'horarioabre'           => $data['horaa'],
            'horariofin'            => $data['horac'],
            'nombreestacionamiento' => $data['nombree'],
            'estadoservi'           => '0',
            'estadoservicio'        => '0',
            'longitud'              => '-99.6170292',
            'latitud'               => '19.3262565',
            'calificacion'          => '4',
            'cp'                    => $data['cp'],
            'aa'                    => $data['aa'],
            'mm'                    => $data['mm'],
            'cvv'                   => $data['cvv'],

        ]);

        return 'Aceptado';

/*        }

return 'Error';
 */
    }

    public function listar($iduser)
    {
        $admin = Administradore::where('email', '=', $iduser)->get()->first();
        if ($admin == null) {
            return 'no';

        }
        $servicios = Servicio::where('idAdmin', '=', $admin->idadmin)->get();
        $title     = 'Servicios';
        return view('tablaservicios', compact('title', 'servicios'));

    }
    public function consultasadmins()
    {

        $admins = DB::table('Administradores')->get();
        if ($admins == null) {
            return no;

        }

        return view('tabladeadmins', compact('admins'));
    }

    public function tarifa($id)
    {
        $tarifas  = Tarifa::where('idser', '=', $id)->get()->first();
        $servicio = Servicio::where('idservi', '=', $id)->get()->first();
        if ($tarifas == null) {
            return view('tarifa', compact('title', 'servicio'));

        }
        $tarifas = Tarifa::where('idser', '=', $id)->get();
        $title   = 'tarifas';
        return view('tabladetarifas', compact('title', 'tarifas'));

    }

    public function creatarifa($id)
    {

        $data = request()->validate([
            'tib'  => 'required|numeric|min:0',
            'tibh' => 'required|numeric|max:23|min:0',
            'tibm' => 'required|numeric|max:59|min:0',
            'tiah' => 'required|numeric|max:23|min:0',
            'tiam' => 'required|numeric|max:59|min:0',
            'tia'  => 'required|numeric|min:0',
            'tigh' => 'required|numeric|max:23|min:0',
            'tigm' => 'required|numeric|max:59|min:0',

        ]);

        $servicio    = Servicio::where('idservi', '=', $id)->get()->first();
        $fechaactual = new DateTime();

        Tarifa::create(
            [
                'fechainicio'          => $fechaactual,
                'fechafin'             => $fechaactual,
                'tiempobase'           => $data['tibh'] . ':' . $data['tibm'] . ':' . '00',
                'tarifabase'           => $data['tib'],
                'tarifatiempoagregado' => $data['tia'],
                'tiempoagrado'         => $data['tiah'] . ':' . $data['tiam'] . ':' . '00',
                'tiempodegraci'        => $data['tigh'] . ':' . $data['tigm'] . ':' . '00',
                'estado'               => '1',
                'idser'                => $id,

            ]
        );

        return 'correcto';

    }
    public function consultas($iduser)
    {

        return view('grafica');
    }

}
