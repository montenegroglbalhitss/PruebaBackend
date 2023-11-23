<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'usuario' => 'nombreusuario',
                'primerNombre' => 'Nombre',
                'segundoNombre' => 'SegundoNombre',
                'primerApellido' => 'Apellido',
                'segundoApellido' => 'SegundoApellido',
                'idDepartamento' => 1, // Asigna un ID de departamento existente
                'idCargo' => 1, // Asigna un ID de cargo existente
                 'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más registros según sea necesario
        ]);
    }
}