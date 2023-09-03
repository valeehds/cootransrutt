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
        $request->validate([
            'fotoFactura' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        Mantenimientos::create([
            'idMantenimiento' => $request['idMantenimiento'],
            'idVehiculo' => $request['idv'],
            'fechaMantenimiento' => $request['fechaMantenimiento'],
            'observaciones' => $request['observaciones'],
            'valorManoobra' => $request['valorManoobra'],
            'valorPiezas' => $request['valorPiezas'],
            'valorTotal' => $request['valorTotal'],
        ]);

        if ($request->hasFile('fotoFactura')) {
            $imagePath = $request->file('fotoFactura')->store('mantenimientos');
            $mantenimiento->update([
                'fotoFactura' => $imagePath,
            ]);
        }

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





    

