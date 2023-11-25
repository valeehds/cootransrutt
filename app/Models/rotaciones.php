<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rotaciones extends Model
{
    use HasFactory;
    protected $fillable = ['idRotacion', 'idVehiculo', 'idUsuario', 'fechaAsignacion', 'fechaFinasignacion'];
    protected $primaryKey='idRotacion';

}

