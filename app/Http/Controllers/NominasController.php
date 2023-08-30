<?php

namespace App\Http\Controllers;

use App\Models\Nominas;
use Illuminate\Http\Request;


class NominasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nominas = Nominas::orderBy('fechaInicio', 'ASC')->get();
        return view('nominas.index', ['nominas' => $nominas]);    }

    /**
     * Show the form for creating a new resource.
     */
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
    public function show(Nominas $nominas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nominas $nominas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nominas $nominas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nominas $nominas)
    {
        //
    }
}
