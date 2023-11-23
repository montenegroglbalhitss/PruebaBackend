<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departamentos')->insert([
            [
                'codigo' => 'COD001',
                'nombre' => 'Ventas',
                'activo' => true,
                 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codigo' => 'COD002',
                'nombre' => 'Recursos Humanos',
                'activo' => true,
                 'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más registros según sea necesario
        ]); 
    }
}
