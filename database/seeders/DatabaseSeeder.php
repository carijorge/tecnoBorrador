<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\UsuarioSeeder;
use Database\Seeders\ProductoSeeder;
use Database\Seeders\CategoriaSeeder;
use Database\Seeders\RolSeeder;
use Database\Seeders\CarritoSeeder;
use Database\Seeders\CarritoDetalleSeeder;
use Database\Seeders\InventarioSeeder;
use Database\Seeders\MovimientoSeeder;
use Database\Seeders\VentaSeeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create(['name' => 'daniel', 'email' => 'daniel@gmail.com','password'=>Hash::make(000)]);
        User::create(['name' => 'bryan', 'email' => 'bryan@gmail.com','password'=>Hash::make(000)]);
        User::create(['name' => 'jorge', 'email' => 'jorge@gmail.com','password'=>Hash::make(000)]);


        $this->call('Database\Seeders\CategoriaSeeder');
        $this->call('Database\Seeders\RolSeeder');
        $this->call('Database\Seeders\ProductoSeeder');
        $this->call('Database\Seeders\UsuarioSeeder');
        $this->call('Database\Seeders\CarritoSeeder');
        $this->call('Database\Seeders\CarritoDetalleSeeder');
        $this->call('Database\Seeders\InventarioSeeder');
        $this->call('Database\Seeders\MovimientoSeeder');

    }
}
