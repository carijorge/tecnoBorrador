<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    use HasFactory;
    protected $fillable = [
        'activo',
        'monto',
        'cantidad',
        'id_usuario'
    ];
}
