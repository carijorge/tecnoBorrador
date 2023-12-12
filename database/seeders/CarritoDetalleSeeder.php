<?php

namespace Database\Seeders;

use App\Models\carrito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\carrito_detalle;

class CarritoDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        carrito_detalle::create(['cantidad' =>3,'precio_u'=>5,'subtotal'=>15,'producto_id'=>1,'carrito_id'=>1]);
        carrito_detalle::create(['cantidad' =>5,'precio_u'=>4.20,'subtotal'=>21,'producto_id'=>3,'carrito_id'=>1]);
        carrito_detalle::create(['cantidad' =>1,'precio_u'=>4,'subtotal'=>4,'producto_id'=>2,'carrito_id'=>1]);
        carrito_detalle::create(['cantidad' =>1,'precio_u'=>10,'subtotal'=>10,'producto_id'=>4,'carrito_id'=>1]);
    }
}
