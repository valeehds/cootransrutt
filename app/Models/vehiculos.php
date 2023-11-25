<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculos extends Model
{
    use HasFactory;
    protected $fillable=['idVehiculo','idUsuario','marca','numPlaca','modeloVehiculo',
    'capacidadPasajeros','codigoUt','estado'];
    protected $primaryKey='idVehiculo';
<<<<<<< HEAD

=======
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
}
