<?php

namespace App\Http\Controllers;

use App\Models\Rutas; 
use App\Models\Rotaciones; 
use App\Models\Recorridos; 
use App\Models\Personas; 
use App\Models\Vehiculos; 
use App\Models\Despachos; 
use Illuminate\Http\Request;

class RecorridosController extends Controller
{
    public function index()
    {
        $recorridos = Recorridos::orderBy('numPasajeros', 'ASC')->get();
        return view('recorridos.index', ['recorridos' => $recorridos]);
    }

    public function persona($id)
    {
        $personas = Personas::orderBy('nombrePersona', 'ASC')->where('idRotacion', '=', $id)->get();
        $vehiculos = Vehiculos::orderBy('idVehiculo', 'ASC')->where('idRotacion', '=', $id)->get();
        return view('recorridos.personas', ['personas' => $personas, 'vehiculos' => $vehiculos]);
    }

    public function create()
    {
        $rotaciones = Rotaciones::orderBy('fechaAsignacion', 'ASC')->get();
        $rutas = Rutas::orderBy('tiempoEstimado', 'ASC')->get();
        return view('recorridos.create', ['rotaciones' => $rotaciones, 'rutas' => $rutas]);
    }

    public function store(Request $request)
    {
        $idDespacho = $request->input('idDespacho');
        
        // Aquí puedes agregar validación de datos si es necesario

        Recorridos::create([
            'idRuta' => $request->input('idRuta'),
            'idRotacion' => $request->input('idRotacion'),
            'numPasajeros' => $request->input('numPasajeros'),
            'fechaHoraincio' => $request->input('fechaHoraincio'),
            'fechaHorafin' => $request->input('fechaHorafin'),
        ]);

        return redirect()->route('despacho.rutas', ['id' => $idDespacho])->with('success', 'Recorrido creado exitosamente');
    }

    public function edit($id)
    {
        $recorrido = Recorridos::findOrFail($id);
        $rutas = Rutas::orderBy('tiempoEstimado', 'ASC')->get();
        $despachos = Despachos::orderBy('nombre', 'ASC')->get();
        return view('recorridos.edit', ['recorrido' => $recorrido, 'rutas' => $rutas, 'despachos' => $despachos]);
    }

    public function update(Request $request, $id)
    {
        $recorrido = Recorridos::findOrFail($id);

        // Aquí puedes agregar validación de datos si es necesario

        $recorrido->update([
            'idRuta' => $request->input('idRuta'),
            'idRotacion' => $request->input('idRotacion'),
            'numPasajeros' => $request->input('numPasajeros'),
            'fechaHoraincio' => $request->input('fechaHoraincio'),
            'fechaHorafin' => $request->input('fechaHorafin'),
        ]);

        return redirect()->route('despacho.rutas', ['id' => $recorrido->idDespacho])->with('success', 'Recorrido actualizado exitosamente');
    }

    public function destroy($id)
    {
        $recorrido = Recorridos::findOrFail($id);
        $idDespacho = $recorrido->idDespacho;
        $recorrido->delete();
        return redirect()->route('despacho.rutas', ['id' => $idDespacho])->with('success', 'Recorrido eliminado exitosamente');
    }
}
