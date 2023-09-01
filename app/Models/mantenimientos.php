<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mantenimientos extends Model
{
    use HasFactory;
    protected $fillable=['idMantenimiento', 'idVehiculo', 'fechaMantenimiento', 'observaciones', 'valorManoobra',
    'valorPiezas', 'valorTotal', 'fotoFactura'];
    protected $primaryKey='idMantenimiento';
}
