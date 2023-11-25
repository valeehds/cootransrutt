<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\vehiculos;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Database\QueryException;


class VehiculoController extends Controller
{
    public function index()
     {
         $vehiculos = Vehiculos::join('users', 'users.id', '=', 'vehiculos.idUsuario')
                         ->where('users.rol', 'conductores')
                         ->orderBy('users.name', 'ASC')
                         ->paginate(4);
     
         return view('vehiculos.index', ['vehiculos' => $vehiculos]);
     }

    public function create()
    {
        $personas = User::where('rol', 'conductores')->orderBy('name','ASC')->get();
        return view('vehiculos.create', ['personas' => $personas]);
    }

=======

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = vehiculos::orderBy('modeloVehiculo', 'ASC')->get();
        return view('vehiculos.index', ['vehiculos' => $vehiculos]);
    }

    /**
     * Show the form for creating a new resource.
     */
        public function create()
    {
        $personas = User::orderBy('name', 'ASC')->get();
        return view('vehiculos.create', ['personas' => $personas]);
    }

    /**
     * Store a newly created resource in storage.
     */
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
    public function store(Request $request)
    {
        Vehiculos::create([
            'idUsuario' => $request->input('idUsuario'),
            'marca' => $request->input('marca'),
            'numPlaca' => $request->input('numPlaca'),
            'modeloVehiculo' => $request->input('modeloVehiculo'),
            'capacidadPasajeros' => $request->input('capacidadPasajeros'),
            'codigoUt' => $request->input('codigoUt'),
            'estado' => $request->input('estado'),
        ]);

<<<<<<< HEAD
        return redirect()->route('vehiculo.index');
    }

    public function edit($id)
    {
        $vehiculo = vehiculos::findOrFail($id);
        $personas = User::where('rol','conductores')->orderBy('name', 'ASC')->get();
        return view('vehiculos.edit', ['vehiculo' => $vehiculo, 'personas' => $personas]);
    }

=======
        return redirect()->route('vehiculos.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehiculo = vehiculos::findOrFail($id);
        $personas = User::orderBy('name', 'ASC')->get();
        return view('vehiculos.edit', ['vehiculo' => $vehiculo, 'personas' => $personas]);
    }

    /**
     * Update the specified resource in storage.
     */
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
    public function update(Request $request, $id)
    {
        $vehiculo = vehiculos::findOrFail($id);
        $vehiculo->update([
            'idUsuario' => $request->input('idUsuario'),
            'marca' => $request->input('marca'),
            'numPlaca' => $request->input('numPlaca'),
            'modeloVehiculo' => $request->input('modeloVehiculo'),
            'capacidadPasajeros' => $request->input('capacidadPasajeros'),
            'codigoUt' => $request->input('codigoUt'),
            'estado' => $request->input('estado'),
        ]);

<<<<<<< HEAD
        return redirect()->route('vehiculo.index');
    }

    public function destroy($id)
    {
        try {
            $vehiculo = vehiculos::findOrFail($id);
            $vehiculo->delete();

            return redirect()->route('vehiculo.index')->with('success', 'El vehículo se ha eliminado correctamente.');;
        } catch (QueryException $ex) {
            $errorMessage = $ex->getMessage();
            return back()->with('error', 'No se puede eliminar el vehículo porque tiene relaciones con otros registros.');
        }
=======
        return redirect()->route('vehiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehiculo = vehiculos::findOrFail($id);
        $vehiculo->delete();
        return redirect()->route('vehiculos.index');
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
    }
}