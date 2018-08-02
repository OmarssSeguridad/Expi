<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Super;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre'   => 'required|string|max:255',
            'ap'       => 'required|string|max:255',
            'am'       => 'required|string|max:255',
            'telefono' => 'required|numeric|max:9999999999',
            'email'    => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:6|confirmed',

        ]);
    }
    protected function validator1(array $data)
    {
        return Validator::make($data, [
            'nombre'   => 'required|string|max:255',
            'ap'       => 'required|string|max:255',
            'am'       => 'required|string|max:255',
            'telefono' => 'required|numeric|max:9999999999',
            'email'    => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'cuenta'   => 'required|',
        ]);
    }
    protected function validator3(array $data)
    {
        return Validator::make($data, [
            'nombre'   => 'required | string | max:255',
            'ap'       => 'required | string | max:255',
            'am'       => 'required | string | max:255',
            'telefono' => 'required | numeric | max:9999999999',
            'email'    => 'required | string | email | max:50 | unique:users',
            'password' => 'required | string | min:6 | confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $tipo = ['tipo' => '2'];
        return User::create([
            'name'     => $data['nombre'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'tipo'     => $tipo['tipo'],
        ]);
    }
    protected function create1(array $data)
    {
        $tipo = ['tipo' => '1'];
        return User::create([
            'name'     => $data['nombre'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'tipo'     => $tipo['tipo'],
        ]);
    }
    protected function create3(array $data)
    {
        $tipo = ['tipo' => '3'];
        return User::create([
            'name'     => $data['nombre'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'tipo'     => $tipo['tipo'],
        ]);
    }

    public function inserta()
    {
        $tipo = ['tipo' => '1'];

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

            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'tipo'     => $tipo['tipo'],
        ]);

        Super::create([
            'email'    => $request['email'],
            'nombre'   => $request['nombre'],
            'ap'       => $request['ap'],
            'am'       => $request['am'],
            'telefono' => $request['telefono'],
            'cuenta'   => $request['cuenta'],

        ]);

        return redirect()->route('login');
    }

}
