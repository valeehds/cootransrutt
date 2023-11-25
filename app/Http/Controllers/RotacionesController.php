<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rotaciones;
use App\Models\User;
use App\Models\Vehiculos;

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
        $personas = User::all(); 
        $vehiculos = Vehiculos::all(); 

        return view('rotaciones.create', ['personas' => $personas, 'vehiculos' => $vehiculos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $request->validate([
            'fechaAsignacion'=>'required|date|after_or_equal:' . now()->toDateString(),
            'fechaFinasignacion'=>'required|date|after_or_equal:' . now()->toDateString(),
        ], [
<<<<<<< HEAD
            'fecha.after_or_equal'=>'La fecha deben ser igual o posterior a la fecha actual',
=======
            'fecha.after_or_equal'=>'La fecha debe ser igual o posterior a la fecha actual',
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
        ]
    
    );
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
        $personas = User::all(); 
        $vehiculos = Vehiculos::all(); 
    
        return view('rotaciones.edit', ['rotaciones' => $rotaciones, 'personas' => $personas, 'vehiculos' => $vehiculos]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
=======
        $request->validate([
            'fechaAsignacion'=>'required|date|after_or_equal:' . now()->toDateString(),
            'fechaFinasignacion'=>'required|date|after_or_equal:' . now()->toDateString(),
        ], [
            'fecha.after_or_equal'=>'La fecha debe ser igual o posterior a la fecha actual',
        ]
    
    );
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
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
