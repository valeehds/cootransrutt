<?php

use Illuminate\Support\Facades\Route;
use App\Models\mantenimientos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//1. PERSONAS
route::get('personas/index',[App\Http\Controllers\PersonasController::class, 'index'])->name('persona.index');
route::get('personas/create',[App\Http\Controllers\PersonasController::class, 'create'])->name('persona.create');
route::post('personas/store',[App\Http\Controllers\PersonasController::class, 'store'])->name('personas.store');
route::get('personas/edit/{id}',[App\Http\Controllers\PersonasController::class, 'edit'])->name('persona.edit');
Route::put('personas/update/{id}', [App\Http\Controllers\PersonasController::class, 'update'])->name('persona.update');

route::get('personas/destroy{id}',[App\Http\Controllers\PersonasController::class, 'destroy'])->name('persona.destroy');

//2.NÓMINAS
route::get('nomina/index',[App\Http\Controllers\NominasController::class, 'index'])->name('nomina.index');
route::get('nomina/create',[App\Http\Controllers\NominasController::class, 'create'])->name('nomina.create');
route::post('nomina/store',[App\Http\Controllers\NominasController::class, 'store'])->name('nomina.store');
route::get('nomina/edit/{id}',[App\Http\Controllers\NominasController::class, 'edit'])->name('nomina.edit');
Route::get('nomina/update/{id}', [App\Http\Controllers\NominasController::class, 'update'])->name('nomina.update');
route::get('nomina/destroy{id}',[App\Http\Controllers\NominasController::class, 'destroy'])->name('nomina.destroy');
//3. VEHICULOS

//4. MANTENIMIENTOS
Route::get('mantenimiento.info', function () {return view('conductores.vistap');})->name('mantenimiento.info');

route::get('mantenimientos/index',[App\Http\Controllers\MantenimientosController::class, 'index'])->name('mantenimiento.index');
route::get('mantenimientos/create',[App\Http\Controllers\MantenimientosController::class, 'create'])->name('mantenimiento.create');
route::post('mantenimientos/store',[App\Http\Controllers\MantenimientosController::class, 'store'])->name('mantenimiento.store');
route::get('mantenimientos/edit/{id}',[App\Http\Controllers\MantenimientosController::class, 'edit'])->name('mantenimiento.edit');
route::get('mantenimientos/update/{id}',[App\Http\Controllers\MantenimientosController::class, 'update'])->name('mantenimiento.update');
route::get('mantenimientos/destroy{id}',[App\Http\Controllers\MantenimientosController::class, 'destroy'])->name('mantenimiento.destroy');
/* Route::get('mantenimientos/download/{id}', 'MantenimientosController@download')->name('mantenimientos.download'); */

//5. RUTAS

route::get('rutas/create',[App\Http\Controllers\RutasController::class, 'create'])->name('ruta.create');
route::post('rutas/store',[App\Http\Controllers\RutasController::class, 'store'])->name('ruta.store');
route::get('rutas/edit/{id}',[App\Http\Controllers\RutasController::class, 'edit'])->name('ruta.edit');
route::get('rutas/update/{id}',[App\Http\Controllers\RutasController::class, 'update'])->name('ruta.update');
route::get('rutas/destroy{id}',[App\Http\Controllers\RutasController::class, 'destroy'])->name('ruta.destroy');
//6. RECORRIDOS
route::get('recorridos/create',[App\Http\Controllers\RecorridosController::class, 'create'])->name('recorrido.create');
route::post('recorridos/store',[App\Http\Controllers\RecorridosController::class, 'store'])->name('recorrido.store');
route::get('recorridos/edit/{id}',[App\Http\Controllers\RecorridosController::class, 'edit'])->name('recorrido.edit');
route::get('recorridos/update/{id}',[App\Http\Controllers\RecorridosController::class, 'update'])->name('recorrido.update');
route::get('recorridos/destroy{id}',[App\Http\Controllers\RecorridosController::class, 'destroy'])->name('recorrido.destroy');

//7. ROTACIONES
Route::get('/rec', [App\Http\Controllers\RotacionesController::class, 'index'])->name('rotacion.index');
Route::get('/rutas/{id}', [App\Http\Controllers\RotacionesController::class, 'rutas'])->name('rotacion.persona');
route::get('rotaciones/create',[App\Http\Controllers\RotacionesController::class, 'create'])->name('rotacion.create');
route::post('rotaciones/store',[App\Http\Controllers\RotacionesController::class, 'store'])->name('rotacion.store');
route::get('rotaciones/edit/{id}',[App\Http\Controllers\RotacionesController::class, 'edit'])->name('rotacion.edit');
route::get('rotaciones/update/{id}',[App\Http\Controllers\RotacionesController::class, 'update'])->name('rotacion.update');
route::get('rotaciones/destroy{id}',[App\Http\Controllers\RotacionesController::class, 'destroy'])->name('rotacion.destroy');



//8. DESPACHOS
Route::get('/des', [App\Http\Controllers\DespachosController::class, 'index'])->name('despacho.index');
Route::get('/rutas/{id}', [App\Http\Controllers\DespachosController::class, 'rutas'])->name('despacho.rutas');
route::get('despachos/create',[App\Http\Controllers\DespachosController::class, 'create'])->name('despacho.create');
route::post('despachos/store',[App\Http\Controllers\DespachosController::class, 'store'])->name('despacho.store');
route::get('despachos/edit/{id}',[App\Http\Controllers\DespachosController::class, 'edit'])->name('despacho.edit');
route::get('despachos/update/{id}',[App\Http\Controllers\DespachosController::class, 'update'])->name('despacho.update');
route::get('despachos/destroy{id}',[App\Http\Controllers\DespachosController::class, 'destroy'])->name('despacho.destroy');

//9. VEHICULOS
Route::get('/vehiculos/index', [App\Http\Controllers\VehiculoController::class, 'index'])->name('vehiculos.index');
route::get('vehiculos/create',[App\Http\Controllers\VehiculoController::class, 'create'])->name('vehiculos.create');
route::post('vehiculos/store',[App\Http\Controllers\VehiculoController::class, 'store'])->name('vehiculos.store');
route::get('vehiculos/edit/{id}',[App\Http\Controllers\VehiculoController::class, 'edit'])->name('vehiculos.edit');
Route::get('vehiculos/update/{id}', [App\Http\Controllers\VehiculoController::class, 'update'])->name('vehiculos.update');
route::get('vehiculos/destroy{id}',[App\Http\Controllers\VehiculoController::class, 'destroy'])->name('vehiculos.destroy');