<?php
namespace App\Http\Controllers;
use App\Models\rutas;
use App\Models\despachos;
use App\Models\recorridos;
use App\Models\rotaciones;
use Illuminate\Http\Request;

class RecorridosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recorridos = Recorridos::orderBy('fechaAsignacion','ASC')->get();
        return view('recorridos.index',['recorridos'=>$recorridos]);
    }
    public function persona($id)
    {
        $personas = Personas::orderBy('nombrePersona','ASC')->where('idRotacion','=',$id)->get();
        $vehiculos = Vehiculos::orderBy('idVehiculo','ASC')->where('idRotacion','=',$id)->get();
        return view('recorridos.personas', ['personas' => $personas, 'vehiculos' => $vehiculos]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rotaciones = Rotaciones::orderBy('fechaAsignacion', 'ASC')->get(); 
        $rutas = Rutas::orderBy('tiempoEstimado', 'ASC')->get(); 
        return view('recorridos.create', ['rotaciones' => $rotaciones, 'rutas' => $rutas]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $idDespacho = $request->input('idDespacho'); // Obtén el valor de idDespacho desde el formulario
    
        Recorridos::create([
            'idRuta' => $request->input('idRuta'),
            'idRotacion' => $request->input('idRotacion'),
            'numPasajeros' => $request->input('numPasajeros'),
            'fechaHoraincio' => $request->input('fechaHoraincio'),
            'fechaHorafin' => $request->input('fechaHorafin'),
        ]);
    
        return redirect()->route('despacho.rutas', ['id' => $idDespacho])->with('success', 'Recorrido creado exitosamente');
    }
    
    public function edit($id)
    {
        $recorrido = Recorridos::findOrFail($id);
        $rutas = Rutas::orderBy('tiempoEstimado', 'ASC')->get(); // Obtén la lista de rutas
        $despachos = Despachos::orderBy('nombre', 'ASC')->get(); // Obtén la lista de despachos
        return view('recorridos.edit', ['recorrido' => $recorrido, 'rutas' => $rutas, 'despachos' => $despachos]);
    }
    
    public function update(Request $request, $id)
    {
        $recorrido = Recorridos::findOrFail($id);
    
        $recorrido->update([
            'idRuta' => $request->input('idRuta'),
            'idRotacion' => $request->input('idRotacion'),
            'numPasajeros' => $request->input('numPasajeros'),
            'fechaHoraincio' => $request->input('fechaHoraincio'),
            'fechaHorafin' => $request->input('fechaHorafin'),
        ]);
    
        return redirect()->route('despacho.rutas', ['id' => $recorrido->idDespacho])->with('success', 'Recorrido actualizado exitosamente');
    }
    
    public function destroy($id)
    {
        $recorrido = Recorridos::findOrFail($id);
        $idDespacho = $recorrido->idDespacho;
        $recorrido->delete();
        return redirect()->route('despacho.rutas', ['id' => $idDespacho])->with('success', 'Recorrido eliminado exitosamente');
    }
}    