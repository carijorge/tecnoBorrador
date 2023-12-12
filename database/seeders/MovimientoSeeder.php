<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\movimiento;

class MovimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        movimiento::create(['cantidad' =>2,'fecha_movimiento' =>'2023-12-09','motivo_movimiento' =>'venta','id_producto'=>1,'id_inventario'=>1]);
        movimiento::create(['cantidad' =>2,'fecha_movimiento' =>'2023-12-09','motivo_movimiento' =>'venta','id_producto'=>1,'id_inventario'=>1]);
    }
}
