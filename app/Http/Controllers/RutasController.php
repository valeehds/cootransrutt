<?php

    namespace App\Http\Controllers;
    use App\Models\Despachos;
    use App\Models\Rutas;
    use Illuminate\Http\Request;
    
    class RutasController extends Controller
    {
        public function index()
        {
            $rutas= Rutas::orderBy('idRuta','ASC')->get();
           
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
            $idDespacho = $request->input('idDespacho'); // Obtén el idDespacho de la solicitud
        
            Rutas::create([
                'idDespacho' => $idDespacho,
                'tiempoEstimado' => $request->input('tiempoEstimado'),
                'valorTiquete' => $request->input('valorTiquete'),
            ]);
        
            return redirect()->route('despacho.rutas', ['id' => $idDespacho])->with('success', 'Ruta creada exitosamente');
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
    