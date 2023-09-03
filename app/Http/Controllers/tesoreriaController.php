<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tesoreriaController extends Controller
{
    //
    public function formulario()
    {
        if (auth()->user()->rol !== 'tesoreria') {
            abort(403, 'Acceso no autorizado.');
        }

        return view('formulario1');
    }
}
