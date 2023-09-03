<?php

namespace App\Http\Controllers;

use App\Models\despachos;
use App\Models\rutas;
use App\Models\recorridos;
use Illuminate\Http\Request;

class DespachosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $despachos = Despachos::orderBy('nombre','ASC')->get();
        return view('despachos.index',['despachos'=>$despachos]);
    }
   

    /**
     * Show the form for creating a new resource.
     */
    public function rutas($id)
    {
        $rutas = Rutas::orderBy('tiempoEstimado','ASC')->where('idDespacho','=',$id)->get();
        $rut = $rutas[0]->idRuta;
        $recorridos = Recorridos::orderBy('numPasajeros','ASC')->where('idRuta','=',$rut)->get();
        return view('despachos.rutas',['rutas'=>$rutas,'recorridos'=>$recorridos]);
    }
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(despachos $despachos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(despachos $despachos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, despachos $despachos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(despachos $despachos)
    {
        //
    }
}
