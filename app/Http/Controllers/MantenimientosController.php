<?php

namespace App\Http\Controllers;

use App\Models\Mantenimientos;
use App\Models\Vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;

class MantenimientosController extends Controller
{
    public function info()
    {
       
        return view('conductores.vistap');
    }

    public function index()
    {
        $mantenimientos = Mantenimientos::select('mantenimientos.*', 'vehiculos.numPlaca')
            ->leftJoin('vehiculos', 'mantenimientos.idVehiculo', '=', 'vehiculos.idVehiculo')
            ->orderBy('fechaMantenimiento', 'DESC')
            ->paginate(4);

        return view('conductores.index', compact('mantenimientos'));
    }

    public function create()
    {
        $vehiculos = Vehiculos::orderBy('marca', 'ASC')->get();
        return view('conductores.create', ['vehiculos' => $vehiculos]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'idv' => 'required',
            'observaciones' => 'required',
            'valorManoobra' => 'required',  
            'valorPiezas' => 'required',
            'valorTotal' => 'required',
            'fotoFactura' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]); 

        $mantenimiento = new Mantenimientos;
        $mantenimiento->idVehiculo = $request->input('idv');
        $mantenimiento->fechaMantenimiento = $request->input('fechaMantenimiento');
        $mantenimiento->observaciones = $request->input('observaciones');
        $mantenimiento->valorManoobra = $request->input('valorManoobra');
        $mantenimiento->valorPiezas = $request->input('valorPiezas');
        $mantenimiento->valorTotal = $request->input('valorTotal');
        $mantenimiento->fotoFactura = $request->input('fotoFactura');
        $mantenimiento->save();

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

        $fechaActual = now()->toDateString();

        $request->validate([
            'idv' => 'required',
            'observaciones' => 'required',
            'valorManoobra' => 'required',
            'valorPiezas' => 'required',
            'valorTotal' => 'required',
            'fotoFactura' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $mantenimiento->update([
           
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

    public function destroy($id)
    {
        try {
            $mantenimiento = Mantenimientos::findOrFail($id);
            $mantenimiento->delete();
            return redirect()->route('mantenimiento.index')->with('success', '¡Mantenimiento eliminado correctamente!');
        } catch (QueryException $ex) {
            return back()->with('error', 'No se puede eliminar el mantenimiento porque tiene relaciones con otros registros.');
        }
    }

    public function download($id)
    {
        $mantenimiento = Mantenimientos::findOrFail($id);
    
        $imagePath = $mantenimiento->fotoFactura;
    
        if (Storage::exists($imagePath)) {
            $file = Storage::get($imagePath);
            $contentType = Storage::mimeType($imagePath);
    
            $headers = [
                'Content-Type' => $contentType,
            ];
    
            return response($file, 200)->withHeaders($headers);
        } else {
            return abort(404); // Archivo no encontrado
        }
    }
}
