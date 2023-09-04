<?php

    namespace App\Http\Controllers;
    
    use App\Models\Rutas;
    use Illuminate\Http\Request;
    
    class RutasController extends Controller
    {
        public function index()
        {
            $rutas= Rutas::orderBy('nombre','ASC')->get();
            return view('despachos.index',['despachos'=>$despachos]);
        }
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('rutas.create');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            Rutas::create([
                'tiempoEstimado' => $request->input('tiempoEstimado'),
                'valorTiquete' => $request->input('valorTiquete'),
            ]);
            return redirect()->route('rutas.index')->with('success', 'Ruta creada exitosamente');
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit($id)
        {
            $rutas = Rutas::findOrFail($id);
            return view('rutas.edit', ['rutas' => $rutas]);
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id)
        {
            $despachos = Despachos::findOrFail($id);
            $despachos->update([
            'tiempoEstimado' => $request->input('tiempoEstimado'),
            'valorTiquete' => $request->input('valorTiquete'),
   
        ]);
            return redirect()->route('rutas.index')->with('success', 'Ruta actualizada exitosamente');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id)
        {
            $rutas = Rutas::findOrFail($id);
            $rutas->delete();
            return redirect()->route('rutas.index')->with('success', 'Ruta eliminada exitosamente');
        }
    }
    