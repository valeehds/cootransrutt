<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class secretariaController extends Controller
{
    //
    public function formulario()
    {
        if (auth()->user()->rol !== 'Secreteria') {
            abort(403, 'Acceso no autorizado.');
        }

        return view('formulario1');
    }
}
