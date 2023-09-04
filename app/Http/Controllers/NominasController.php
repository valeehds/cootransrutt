<?php

namespace App\Http\Controllers;

use App\Models\Nominas;
use App\Models\User;
use Illuminate\Http\Request;

class NominasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nominas = Nominas::orderBy('fechaInicio', 'ASC')->get();
        return view('nominas.index', ['nominas' => $nominas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = User::orderBy('name', 'ASC')->get();
        return view('nominas.create', ['personas' => $personas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Nominas::create([
            'idUsuario' => $request->input('idUsuario'),
            'horasTrabajadas' => $request->input('horasTrabajadas'),
            'horasExtras' => $request->input('horasExtras'),
            'fechaInicio' => $request->input('fechaInicio'),
            'fechaFin' => $request->input('fechaFin'),
            'valorHorastrabajadas' => $request->input('valorHorastrabajadas'),
            'valorHorasextras' => $request->input('valorHorasextras'),
            'porcenta' => $request->input('porcenta'),
            'totalPago' => $request->input('totalPago')
        ]);

        return redirect()->route('nomina.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $nominas = Nominas::findOrFail($id);
        $personas = User::orderBy('name', 'ASC')->get();
        return view('nominas.edit', ['nominas' => $nominas, 'personas' => $personas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $nominas = Nominas::findOrFail($id);
        $nominas->update([
            'id' => $request->input('id'),
            'horasTrabajadas' => $request->input('horasTrabajadas'),
            'horasExtras' => $request->input('horasExtras'),
            'fechaInicio' => $request->input('fechaInicio'),
            'fechaFin' => $request->input('fechaFin'),
            'valorHorastrabajadas' => $request->input('valorHorastrabajadas'),
            'valorHorasextras' => $request->input('valorHorasextras'),
            'porcentaje' => $request->input('porcentaje'),
            'totalPago' => $request->input('totalPago'),
        ]);

        return redirect()->route('nomina.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nominas = Nominas::findOrFail($id);
        $nominas->delete();
        return redirect()->route('nomina.index');
    }
}
