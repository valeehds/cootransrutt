<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculos extends Model
{
    use HasFactory;
    protected $fillable=['idVehiculo','idPersona','marca','numPlaca','modeloVehiculo',
    'capacidadPasajeros','codigoUt','estado'];
    protected $primaryKey='idVehiculo';
}
