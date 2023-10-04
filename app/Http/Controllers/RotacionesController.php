<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rotaciones;

class RotacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rotaciones = Rotaciones::orderBy('fechaAsignacion', 'ASC')->get();
        return view('rotaciones.index', ['rotaciones' => $rotaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('rotaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Rotaciones::create([
            'idVehiculo' => $request->input('idVehiculo'),
            'idUsuario' => $request->input('idUsuario'),
            'fechaAsignacion' => $request->input('fechaAsignacion'),
            'fechaFinasignacion' => $request->input('fechaFinasignacion'),
        ]);

        return redirect()->route('rotacion.index')->with('success', 'Rotación creada exitosamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rotaciones = Rotaciones::findOrFail($id);
        return view('rotaciones.edit', ['rotaciones' => $rotaciones]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rotaciones = Rotaciones::findOrFail($id);

        $rotaciones->update([
            'idVehiculo' => $request->input('idVehiculo'),
            'idUsuario' => $request->input('idUsuario'),
            'fechaAsignacion' => $request->input('fechaAsignacion'),
            'fechaFinasignacion' => $request->input('fechaFinasignacion'),
        ]);

        return redirect()->route('rotacion.index')->with('success', 'Rotación actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rotacion = Rotaciones::findOrFail($id);
        $rotacion->delete();

        return redirect()->route('rotacion.index')->with('success', 'Rotación eliminada exitosamente');
    }
}

