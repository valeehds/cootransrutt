<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class conductoresController extends Controller
{
    //
    public function formulario()
    {
        if (auth()->user()->rol !== 'Conductores') {
            abort(403, 'Acceso no autorizado.');
        }

        return view('formulario2');
    }
}
