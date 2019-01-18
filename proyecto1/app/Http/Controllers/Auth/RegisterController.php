<?php

namespace App\Http\Controllers\Auth;

use App\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
            'tipo_documento' => ['required', 'int'],
            'numero_documento' => ['required', 'int'],
            'nombre_cliente' => ['required', 'string', 'max:255'],
            'apellido_cliente' => ['required', 'string', 'max:255'],
            'correo_cliente' => ['required', 'string', 'email', 'max:255', 'unique:clientes'],
            'fecha_nacimiento' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
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
        $puntos = 0;
        return Cliente::create([
            'tipo_documento' => $data['tipo_documento'],
            'numero_documento' => $data['numero_documento'],
            'nombre_cliente' => $data['nombre_cliente'],
            'apellido_cliente' => $data['apellido_cliente'],
            'correo_cliente' => $data['correo_cliente'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'password' => Hash::make($data['password']),
            'puntos_millas' => $puntos,
            'id_pais' => $puntos,
        ]);
    }
}
