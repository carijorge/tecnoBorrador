<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movimiento extends Model
{
    use HasFactory;
    protected $fillable = [
      'cantidad',
      'fecha_movimiento',
      'motivo_movimiento',
      'id_producto',
      'id_inventario'
    ];
}
