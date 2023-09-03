<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class despachos extends Model
{
    use HasFactory;
    protected $fillable=['idDespacho','nombre','direccion'];
    protected $primaryKey='idDespacho';
}
