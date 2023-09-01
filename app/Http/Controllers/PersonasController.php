<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = Personas::orderBy('nombrePersona', 'ASC')->get();
        return view('personas.index', ['personas' => $personas]);
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        Personas::create([
            'cargo' => $request->input('cargo'),
            'nombrePersona' => $request->input('nombrePersona'),
            'apellidoPersona' => $request->input('apellidoPersona'),
            'tipoDoc' => $request->input('tipoDoc'),
            'documentoPersona' => $request->input('documentoPersona'),
            'numLicencia' => $request->input('numLicencia'),
            'fechaNacimiento' => $request->input('fechaNacimiento'),
            'fechaAfiliacion' => $request->input('fechaAfiliacion'),
            'estado' => $request->input('estado'),
        ]);
        
        return redirect()->route('persona.index');
    }

    public function edit($id)
    {
        $personas = Personas::findOrFail($id);
        return view('personas.edit', ['personas' => $personas]);
    }

    public function update(Request $request, $id)
    {
        $personas = Personas::findOrFail($id);

        $personas->update([
            'cargo' => $request->input('cargo'),
            'nombrePersona' => $request->input('nombrePersona'),
            'apellidoPersona' => $request->input('apellidoPersona'),
            'tipoDoc' => $request->input('tipoDoc'),
            'documentoPersona' => $request->input('documentoPersona'),
            'numLicencia' => $request->input('numLicencia'),
            'fechaNacimiento' => $request->input('fechaNacimiento'),
            'fechaAfiliacion' => $request->input('fechaAfiliacion'),
            'estado' => $request->input('estado'),
        ]);
        
        return redirect()->route('persona.index');
    }

    public function destroy($id)
    {
        $personas = Personas::findOrFail($id);
        $personas->delete();
        return redirect()->route('persona.index');
    }
}
