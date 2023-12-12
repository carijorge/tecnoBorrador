<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Usuario::create([ 'nombre' => 'daniel','apellido' => 'banegas','edad'=>19,'correo_electronico'=>'daniel@gmail.com','id_rol'=>1,'id_users'=>3]);
        Usuario::create([ 'nombre' => 'bryan','apellido' => 'cueva','edad'=>27,'correo_electronico'=>'bryan@gmail.com','id_rol'=>2,'id_users'=>1]);
        Usuario::create([ 'nombre' => 'jorge','apellido' => 'cari','edad'=>25,'correo_electronico'=>'jorge@gmail.com','id_rol'=>3,'id_users'=>2]);
    }
}
