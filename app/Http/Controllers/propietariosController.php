<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class propietariosController extends Controller
{
    //
    public function formulario()
    {
        if (auth()->user()->rol !== 'Propietarios') {
            abort(403, 'Acceso no autorizado.');
        }

        return view('propietarios.formulario');
    }
}
