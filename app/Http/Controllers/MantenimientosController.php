<?php

namespace App\Http\Controllers;

use App\Models\Mantenimientos;
use App\Models\Vehiculos;
use Illuminate\Http\Request;

class MantenimientosController extends Controller
{
    public function index()
    {
        $mantenimientos = Mantenimientos::orderBy('fechaMantenimiento', 'DESC')->get();
        return view('conductores.index', ['mantenimientos' => $mantenimientos]);
    }

    public function create()
    {
        $vehiculos = Vehiculos::orderBy('marca', 'ASC')->get();
        return view('conductores.create', ['vehiculos' => $vehiculos]);
    }

    public function store(Request $request)
    {
        Mantenimientos::create([
            'idMantenimiento' => $request['idMantenimiento'],
            'idVehiculo' => $request['idv'],
            'fechaMantenimiento' => $request['fechaMantenimiento'],
            'observaciones' => $request['observaciones'],
            'valorManoobra' => $request['valorManoobra'],
            'valorPiezas' => $request['valorPiezas'],
            'valorTotal' => $request['valorTotal'],
            'fotoFactura' => $request['fotoFactura'],
        ]);

        return redirect()->route('mantenimiento.index');
    }

    public function edit($id)
    {
        $mantenimiento = Mantenimientos::findOrFail($id);
        $vehiculos = Vehiculos::orderBy('marca', 'ASC')->get();
        return view('conductores.edit', ['mantenimiento' => $mantenimiento, 'vehiculos' => $vehiculos]);
    }

    public function update(Request $request, $id)
    {
        $mantenimiento = Mantenimientos::findOrFail($id);
        $mantenimiento->update([
            'idMantenimiento' => $request['idMantenimiento'],
            'idVehiculo' => $request['idv'],
            'fechaMantenimiento' => $request['fechaMantenimiento'],
            'observaciones' => $request['observaciones'],
            'valorManoobra' => $request['valorManoobra'],
            'valorPiezas' => $request['valorPiezas'],
            'valorTotal' => $request['valorTotal'],
            'fotoFactura' => $request['fotoFactura'],
        ]);

        return redirect()->route('mantenimiento.index');
    }

    public function destroy(mantenimientos $mantenimientos)
    {
        // ... código de destroy
    }
}
