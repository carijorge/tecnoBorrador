<?php

namespace Database\Seeders;

use App\Models\categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        categoria::create(['descripcion'=>'Utilitarios Oficina','codigo'=>'050']);
        categoria::create(['descripcion'=>'Utilitarios Arte','codigo'=>'550']);
    }
}
