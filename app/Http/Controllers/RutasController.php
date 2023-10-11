<?php

namespace App\Http\Controllers;
use App\Models\Rutas; 
use App\Models\Despachos;
use App\Models\Recorridos;
use Illuminate\Http\Request;
    
    class RutasController extends Controller
    {
        public function index()
        {
            $rutas = Rutas::orderBy('idRuta', 'ASC')->get();
            return view('rutas.index', ['rutas' => $rutas]);
        }
        /**Recorridos */
        public function recorridos($id)
{
    $recorridos = Recorridos::orderBy('numPasajeros', 'ASC')->where('idRuta', '=', $id)->get();

    return view('recorridos.visualizar', ['recorridos' => $recorridos]);
}

        
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $despachos = Despachos::orderBy('nombre', 'ASC')->get(); 
            return view('rutas.create', ['despachos' => $despachos]);
        }
        
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $rutas = new Rutas();
        
            $rutas->idDespacho = $request->input('idDespacho');
            $rutas->tiempoEstimado = $request->input('tiempoEstimado');
            $rutas->valorTiquete = $request->input('valorTiquete');
        
            if ($request->hasFile('Imagen')) {
                $file = $request->file('Imagen');
        
                // Valida que el archivo sea una imagen
                if ($file->isValid() && strpos($file->getMimeType(), 'image/') === 0) {
                    $fileName = $file->store('public/imagenrutas');
                    $rutas->Imagen = basename($fileName);
                } else {
                    return redirect()->back()->with('error', 'El archivo seleccionado no es una imagen válida.');
                }
            }
        
            $rutas->save();
        
            return redirect()->route('despacho.rutas', ['id' => $request->input('idDespacho')])->with('success', 'Ruta creada exitosamente');
        }
        
        
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit($id)
        {
            $rutas = Rutas::findOrFail($id);
            $despachos = Despachos::orderBy('nombre', 'ASC')->get();
        
            return view('rutas.edit', ['rutas' => $rutas, 'despachos' => $despachos]);
        }
        
        public function updateGoogleMapsLink(Request $request, $id)
        {
            $ruta = Rutas::findOrFail($id); // Find the route by ID
    
            // Update the Google Maps link based on the input from the form
            $ruta->google_maps_link = $request->input('google_maps_link');
            $ruta->save();
    
            return redirect()->route('rutas.index')->with('success', 'Google Maps link updated successfully.');
        }
    
        
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id)
        {
            $ruta = Rutas::findOrFail($id); // Cambia Despachos a Rutas
            $ruta->update([
                'idDespacho' => $request->input('idDespacho'),
                'tiempoEstimado' => $request->input('tiempoEstimado'),
                'valorTiquete' => $request->input('valorTiquete'),
                'imagen' => $request->input('imagen'),
                
            ]);
        
            return redirect()->route('despacho.rutas', ['id' => $ruta->idDespacho])->with('success', 'Ruta actualizada exitosamente');
        }
        
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id)
        {
            $rutas = Rutas::findOrFail($id);
            $idDespacho = $rutas->idDespacho; // Obtenemos el idDespacho antes de eliminar la ruta
            $rutas->delete();

            return redirect()->route('despacho.rutas', ['id' => $idDespacho])->with('success', 'Ruta eliminada exitosamente');
        }

    }
    