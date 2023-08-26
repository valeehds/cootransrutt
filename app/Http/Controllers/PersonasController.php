<?php

namespace App\Http\Controllers;

use App\Models\personas;
use Illuminate\Http\Request;


class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Personas::orderBy('nombrePersona', 'ASC')->get();
        return view('personas.index', ['personas' => $personas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $personas = Personas::orderBy('nombre', 'ASC')->get();
        return view('personas.create', ['personas' => $personas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Personas::create([
            'idPersona' => $request['idPersona'],
            'cargo' => $request['cargo'],
            'nombrePersona' => $request['nombrePersona'],
            'apellidoPersona' => $request['apellidoPersona'],
            'tipoDoc' => $request['tipoDoc'],
            'documentoPersona' => $request['documentoPersona'],
            'numLicencia' => $request['numLicencia'],
            'fechaNacimiento' => $request['fechaNacimiento'],
            'fechaAfiliacion' => $request['fechaAfiliacion'],
            'estado' => $request['estado'],
        ]);
        
        return redirect()->route('persona.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(personas $personas)
    {
        $personas = Personas::findOrFail($id);
        return view('persona.edit', ['personas' => $personas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, personas $personas)
    {
        $mantenimiento = Mantenimientos::findOrFail($id);
        $mantenimiento->update([
            'idPersona' => $request['idPersona'],
            'cargo' => $request['cargo'],
            'nombrePersona' => $request['nombrePersona'],
            'apellidoPersona' => $request['apellidoPersona'],
            'tipoDoc' => $request['tipoDoc'],
            'documentoPersona' => $request['documentoPersona'],
            'numLicencia' => $request['numLicencia'],
            'fechaNacimiento' => $request['fechaNacimiento'],
            'fechaAfiliacion' => $request['fechaAfiliacion'],
            'estado' => $request['estado'],
        ]);
        
        return redirect()->route('persona.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $personas = Personas::findOrFail($id);
        $personas->delete();
        return redirect()->route('persona.index');
    }
}
