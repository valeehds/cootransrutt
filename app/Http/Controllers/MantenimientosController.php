<?php

namespace App\Http\Controllers;

use App\Models\Mantenimientos;
use App\Models\Vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            ->get();

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
            'fechaMantenimiento'=>'required|date|after_or_equal:' . now()->toDateString(),
        ], [
            'fecha.after_or_equal'=>'La fecha debe ser igual o posterior a la fecha actual',
        ]
    
    );

        Mantenimientos::create([
            'idVehiculo' => $request->input('idv'),
            'fechaMantenimiento' => $request->input('fechaMantenimiento'),
            'observaciones' => $request->input('observaciones'),
            'valorManoobra' => $request->input('valorManoobra'),
            'valorPiezas' => $request->input('valorPiezas'),
            'valorTotal' => $request->input('valorTotal'),
            'fotoFactura' => $request->input('fotoFactura'),
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
        $request->validate([
            'fechaMantenimiento'=>'required|date|after_or_equal:' . now()->toDateString(),
        ], [
            'fecha.after_or_equal'=>'La fecha debe ser igual o posterior a la fecha actual',
        ]
    
    );
        $mantenimiento = Mantenimientos::findOrFail($id);
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
        $mantenimiento = Mantenimientos::findOrFail($id);
        $mantenimiento->delete();
        return redirect()->route('mantenimiento.index');
    }

    // Método para subir y guardar una imagen
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
