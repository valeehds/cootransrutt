<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\vehiculos;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = vehiculos::orderBy('modeloVehiculo', 'ASC')->get();
        return view('vehiculos.index', ['vehiculos' => $vehiculos]);
    }

    /**
     * Show the form for creating a new resource.
     */
        public function create()
    {
        $personas = User::orderBy('name', 'ASC')->get();
        return view('vehiculos.create', ['personas' => $personas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Vehiculos::create([
            'idUsuario' => $request->input('idUsuario'),
            'marca' => $request->input('marca'),
            'numPlaca' => $request->input('numPlaca'),
            'modeloVehiculo' => $request->input('modeloVehiculo'),
            'capacidadPasajeros' => $request->input('capacidadPasajeros'),
            'codigoUt' => $request->input('codigoUt'),
            'estado' => $request->input('estado'),
        ]);

        return redirect()->route('vehiculos.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehiculo = vehiculos::findOrFail($id);
        $personas = User::orderBy('name', 'ASC')->get();
        return view('vehiculos.edit', ['vehiculo' => $vehiculo, 'personas' => $personas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vehiculo = vehiculos::findOrFail($id);
        $vehiculo->update([
            'idUsuario' => $request->input('idUsuario'),
            'marca' => $request->input('marca'),
            'numPlaca' => $request->input('numPlaca'),
            'modeloVehiculo' => $request->input('modeloVehiculo'),
            'capacidadPasajeros' => $request->input('capacidadPasajeros'),
            'codigoUt' => $request->input('codigoUt'),
            'estado' => $request->input('estado'),
        ]);

        return redirect()->route('vehiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehiculo = vehiculos::findOrFail($id);
        $vehiculo->delete();
        return redirect()->route('vehiculos.index');
    }
}