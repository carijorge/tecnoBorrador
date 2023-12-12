<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        rol::create(['nombre'=>'admin']);
        rol::create(['nombre'=>'empleado']);
        rol::create(['nombre'=>'cliente']);
    }
}
