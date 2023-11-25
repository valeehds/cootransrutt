<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recorridos extends Model
{
    use HasFactory;
    protected $fillable=['idRecorrido','idRuta','idRotacion','numPasajeros','fechaHorainicio','fechaHorafin'];
    protected $primaryKey='idRecorrido';
    
}
