<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/super/altas', function () {
return view('registroSuper');
})->name('registroSuper');
Route::post('/super/altas', 'Auth\RegisterController@register1');

Route::get('/administradores/asignar', function () {
return view('registroser');
})->name('registroser');
Route::post('/administradores/asignar', 'Auth\RegisterController@registros3');

Route::get('/contrato', function () {
return view('contrato');
})->name('contrato');
Route::post('/contrato', 'Auth\RegisterController@');

Route::get('/administradores/altas', function () {
return view('registroAdmin');
})->name('registroAdmin');
Route::post('/administradores/altas', 'Auth\RegisterController@register2');

 */

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/super/altas', function () {
    return view('registroSuper');
})->name('registroSuper');

Route::post('/super/altas', 'SuperController@crea');

Route::get('/servicio', function () {
    Mapper::map(
        19.263235400000000,
        -99.59892500000000,
        [
            'zoom'     => 10,
            'draggble' => true,

        ]

    );

    return view('servicio');
})->name('servcio');

Route::post('/servicio', 'ServicioController@servicio');

/*Route::get('/asignacontrato/{id}', 'UserController@asignacontrato')->where('id', '[0-9]+');
¨*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/terminosycondiciones', function () {
    return view('terminosycondiciones');
})->name('terminos');
Route::post('/terminosycondiciones', 'TerminosController@crea');

Route::get('/creacontrato', function () {
    return view('creacontrato');
})->name('crearcontrato');
Route::post('/creacontrato', 'ContratosController@crea');

Route::get('/listar/{email}', 'ServicioController@listar');

Route::get('/tarifa/{id}', 'ServicioController@tarifa')->where('id', '[0-9]+');

Route::post('/tarifa/{id}', 'ServicioController@creatarifa')->where('id', '[0-9]+');

Route::get('/consultas/{email}', 'ServicioController@consultas');
Route::get('/administradores/consultas', 'ServicioController@consultasadmins');

Route::get('/maps', function () {
    return view('maps');
});
Route::get('/mapss', function () {
    return view('example');
});
