<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cargos')->insert([
            [
                'codigo' => 'COD001',
                'nombre' => 'Gerente',
                'activo' => true,
                 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codigo' => 'COD002',
                'nombre' => 'Analista',
                'activo' => true,
                 'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más registros según sea necesario
        ]);
    }
}
