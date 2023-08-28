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
route::post('personas/store',[App\Http\Controllers\PersonasController::class, 'store'])->name('persona.store');
route::get('personas/edit/{id}',[App\Http\Controllers\PersonasController::class, 'edit'])->name('persona.edit');
Route::put('personas/update/{id}', [App\Http\Controllers\PersonasController::class, 'update'])->name('persona.update');

route::get('personas/destroy{id}',[App\Http\Controllers\PersonasController::class, 'destroy'])->name('persona.destroy');

//2.NÓMINAS

//3. VEHICULOS

//4. MANTENIMIENTOS
route::get('mantenimientos/index',[App\Http\Controllers\MantenimientosController::class, 'index'])->name('mantenimiento.index');
route::get('mantenimientos/create',[App\Http\Controllers\MantenimientosController::class, 'create'])->name('mantenimiento.create');
route::post('mantenimientos/store',[App\Http\Controllers\MantenimientosController::class, 'store'])->name('mantenimiento.store');
route::get('mantenimientos/edit/{id}',[App\Http\Controllers\MantenimientosController::class, 'edit'])->name('mantenimiento.edit');
route::get('mantenimientos/update/{id}',[App\Http\Controllers\MantenimientosController::class, 'update'])->name('mantenimiento.update');
route::get('mantenimientos/destroy{id}',[App\Http\Controllers\MantenimientosController::class, 'destroy'])->name('mantenimiento.destroy');
Route::post('/archivo/upload',[App\Http\Controllers\MantenimientosController::class, 'upload'])->name('archivo.upload');
//5. RUTAS
Route::get('/map', [App\Http\Controllers\RutasController::class, 'showMap'])->name('rutas.index');



//6. RECORRIDOS

//7. ROTACIONES

//8. DESPACHOS
