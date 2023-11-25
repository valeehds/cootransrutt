<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = User::orderBy('name', 'ASC')->get();
        return view('personas.index', ['personas' => $personas]);
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        Personas::create([
            'rol' => $request->input('rol'),
            'name' => $request->input('name'),
            'apellido' => $request->input('apellido'),
            'tipoDoc' => $request->input('tipoDoc'),
            'documento' => $request->input('documento'),
            'numLicencia' => $request->input('numLicencia'),
            'fechaNacimiento' => $request->input('fechaNacimiento'),
            'fechaAfiliacion' => $request->input('fechaAfiliacion'),
            'estado' => $request->input('estado'),
            'email' => $request->input('email')
        ]);
        
        return redirect()->route('persona.index');
    }

    public function edit($id)
    {
        $personas = User::findOrFail($id);
        return view('personas.edit', ['personas' => $personas]);
    }

    public function update(Request $request, $id)
    {
        $personas = User::findOrFail($id);

        $personas->update([
            'rol' => $request->input('rol'),
            'name' => $request->input('name'),
            'apellido' => $request->input('apellido'),
            'tipoDoc' => $request->input('tipoDoc'),
            'documento' => $request->input('documento'),
            'numLicencia' => $request->input('numLicencia'),
            'fechaNacimiento' => $request->input('fechaNacimiento'),
            'fechaAfiliacion' => $request->input('fechaAfiliacion'),
            'estado' => $request->input('estado'),
            'email' => $request->input('email')
        ]);
        
        return redirect()->route('persona.index');
    }

    public function destroy($id)
    {
        $personas = User::findOrFail($id);
        $personas->delete();
        return redirect()->route('persona.index');
    }
}
