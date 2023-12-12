<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito_detalle extends Model
{
    use HasFactory;
    protected $fillable = [
        'cantidad',
        'precio_u',
        'subtotal',
        'producto_id',
        'carrito_id'
    ];
}
