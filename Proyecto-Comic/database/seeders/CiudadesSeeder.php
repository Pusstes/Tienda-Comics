<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ciudades = [
            [
                'nombre' => 'Benito Juárez',
                'id_estado' => 1, // CDMX
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Coyoacán',
                'id_estado' => 1, // CDMX
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Toluca',
                'id_estado' => 2, // Estado de México
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Guadalajara',
                'id_estado' => 3, // Jalisco
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Monterrey',
                'id_estado' => 4, // Nuevo León
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('ciudades')->insert($ciudades);
    }
}
