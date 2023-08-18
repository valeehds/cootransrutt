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

//2.NÓMINAS

//3. VEHICULOS

//4. MANTENIMIENTOS
route::get('mantenimientos/index',[App\Http\Controllers\MantenimientosController::class, 'index'])->name('mantenimiento.index');
route::get('mantenimientos/create',[App\Http\Controllers\MantenimientosController::class, 'create'])->name('mantenimiento.create');
route::post('mantenimientos/store',[App\Http\Controllers\MantenimientosController::class, 'store'])->name('mantenimiento.store');

//5. RUTAS

//6. RECORRIDOS

//7. ROTACIONES

//8. DESPACHOS
