<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'destino','descripcion', 'lugarEncuentro', 'fechaPartida', 'fechaRegreso', 'cupos','precioAdulto','precioNino'];
}
