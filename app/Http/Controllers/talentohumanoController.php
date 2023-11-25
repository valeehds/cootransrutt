<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class talentohumanoController extends Controller
{
    //
    public function formulario()
    {
        if (auth()->user()->rol !== 'Talento humano') {
            abort(403, 'Acceso no autorizado.');
        }

        return view('formulario1');
    }
}
