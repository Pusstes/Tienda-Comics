<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personas = [
            [
                'nombre' => 'Juan',
                'apellido_paterno' => 'Pérez',
                'apellido_materno' => 'López',
                'fecha_nacimiento' => '1985-05-15',
                'telefono' => '5551234567',
                'email' => 'juan.perez@example.com',
                'id_direccion' => 1,
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'María',
                'apellido_paterno' => 'Rodríguez',
                'apellido_materno' => 'García',
                'fecha_nacimiento' => '1990-09-22',
                'telefono' => '5557654321',
                'email' => 'maria.rodriguez@example.com',
                'id_direccion' => 2,
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Carlos',
                'apellido_paterno' => 'González',
                'apellido_materno' => 'Martínez',
                'fecha_nacimiento' => '1988-11-10',
                'telefono' => '5552468013',
                'email' => 'carlos.gonzalez@example.com',
                'id_direccion' => 3,
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Laura',
                'apellido_paterno' => 'Hernández',
                'apellido_materno' => 'Díaz',
                'fecha_nacimiento' => '1992-03-25',
                'telefono' => '5553692581',
                'email' => 'laura.hernandez@example.com',
                'id_direccion' => 4,
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Roberto',
                'apellido_paterno' => 'Sánchez',
                'apellido_materno' => 'Flores',
                'fecha_nacimiento' => '1982-07-19',
                'telefono' => '5551472583',
                'email' => 'roberto.sanchez@example.com',
                'id_direccion' => 5,
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('personas')->insert($personas);
    }
}
