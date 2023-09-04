<?php

namespace App\Http\Controllers;
use App\Models\vehiculos;
use App\Models\rotaciones;
use App\Models\user;

use Illuminate\Http\Request;

class RotacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rotaciones = Rotaciones::orderBy('fechaAsignacion','ASC')->get();
        return view('rotaciones.index',['rotaciones'=>$rotaciones]);
    }
    public function persona($id)
    {
        $pesonas = User::orderBy('name','ASC')->where('idRotacion','=',$id)->get();
        $vehiculos = Vehiculos::orderBy('idVehiculo','ASC')->where('idRotacion','=',$id)->get();
        return view('rotaciones.personas', ['personas' => $personas, 'vehiculos' => $vehiculos]);
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = User::orderBy('name', 'ASC')->get();
        $vehiculos = Vehiculos::orderBy('idVehiculo', 'ASC')->get();
        return view('rotaciones.create', ['vehiculos' => $vehiculos,'personas'=>$personas,]);
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
        return redirect()->route('rotaciones.index')->with('success', 'Rotación creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(rotaciones $rotaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rotacion = Rotaciones::findOrFail($id);
        return view('rotaciones.edit', ['rotacion' => $rotacion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rotacion = Rotaciones::findOrFail($id);
        $rotacion->update([
            'idVehiculo' => $request->input('idVehiculo'),
            'idUsuario' => $request->input('idUsuario'),
            'fechaAsignacion' => $request->input('fechaAsignacion'),
            'fechaFinasignacion' => $request->input('fechaFinasignacion'),
        ]);

        return redirect()->route('rotaciones.index')->with('success', 'Rotación actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rotacion = Rotaciones::findOrFail($id);
        $rotacion->delete();

        return redirect()->route('rotaciones.index')->with('success', 'Rotación eliminada exitosamente');
    }
}
