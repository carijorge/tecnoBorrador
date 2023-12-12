<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        producto::create(['nombre'=>'borrador','descripcion'=>'material','precio'=>5,'stock'=>20,'codigo'=>'xxx','imagen'=>'','id_categoria'=>1]);
        producto::create(['nombre'=>'tinta','descripcion'=>'material','precio'=>4,'stock'=>20,'codigo'=>'xx0','imagen'=>'','id_categoria'=>1]);
        producto::create(['nombre'=>'marcador','descripcion'=>'material','precio'=>4.20,'stock'=>20,'codigo'=>'xx1','imagen'=>'','id_categoria'=>2]);
        producto::create(['nombre'=>'cuaderno','descripcion'=>'material','precio'=>10,'stock'=>20,'codigo'=>'xx2','imagen'=>'','id_categoria'=>2]);
    }
}
