<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\vehiculos;
use Illuminate\Http\Request;
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

        return redirect()->route('vehiculo.index');
    }

    public function edit($id)
    {
        $vehiculo = vehiculos::findOrFail($id);
        $personas = User::where('rol','conductores')->orderBy('name', 'ASC')->get();
        return view('vehiculos.edit', ['vehiculo' => $vehiculo, 'personas' => $personas]);
    }

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
    }
}