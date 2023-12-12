<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\carrito;

class CarritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        carrito::create(['activo' => '0', 'monto' => 50, 'cantidad' =>10,'id_usuario'=>1]);
    }
}
