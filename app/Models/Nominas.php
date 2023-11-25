<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominas extends Model
{
    use HasFactory;
    protected $fillable= ['idNomina','idUsuario','horasTrabajadas','horasExtras','fechaInicio','fechaFin','valorHorastrabajadas',
    'valorHorasextras','porcenta','totalPago'];
    protected $primaryKey='idNomina';
}
