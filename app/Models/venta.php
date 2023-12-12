<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'descripcion',
        'MontoTotal',
        'CantidadTotal',
        'id_usuario',
        'id_carrito'
    ];
}
