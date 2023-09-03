<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:2', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

     public function register(Request $request)
     {
         $validator = $this->validator($request->all());
     
         if ($validator->fails()) {
             return redirect()->back()
                 ->withErrors($validator)
                 ->withInput();
         }
     
         $user = $this->create($request->all());
     
         if ($request->input('rol') === 'Conductores') {
             return view('formulario2'); // Ruta completa de la vista para Conductores
         } else {
             return view('formulario1'); // Ruta completa de la vista para otros roles
         }
     }
     

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'apellido' => $data['apellido'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'rol' => $data['rol'],
        ]);
    }

    public function infoAdicionalGerencia(Request $request)
    {
        $user = Auth::user();

        if ($user->rol === 'Gerencia') {
            $user->tipoDoc = $request->input('tipoDoc');
            $user->documento = $request->input('documento');
            $user->fechaNacimiento = $request->input('fechaNacimiento');
            $user->save();

            return redirect('/home');
        } else {
            return redirect('/error');
        }
    }


}
