<?php

namespace App\Http\Controllers;

use App\Models\rotaciones;
use Illuminate\Http\Request;

class RotacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rotaciones = Rotaciones::orderBy('fechaAsignacion','ASC')->get();
        return view('rotaciones.index',['rotaciones'=>$rotaciones]);
    }
    public function persona($id)
    {
        $personas = Personas::orderBy('nombrePersona','ASC')->where('idRotacion','=',$id)->get();
        $vehiculos = Vehiculos::orderBy('idVehiculo','ASC')->where('idRotacion','=',$id)->get();
        return view('rotaciones.personas', ['personas' => $personas, 'vehiculos' => $vehiculos]);
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(rotaciones $rotaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rotaciones $rotaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rotaciones $rotaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rotaciones $rotaciones)
    {
        //
    }
}
