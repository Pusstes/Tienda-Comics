<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DireccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $direcciones = [
            [
                'calle' => 'Av. Insurgentes Sur',
                'numero_exterior' => '1235',
                'numero_interior' => 'Piso 5',
                'colonia' => 'Del Valle',
                'id_codigo_postal' => 1, // 03100 Benito Juárez
                'referencias' => 'Edificio de oficinas, cerca del metrobus',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'calle' => 'Av. Universidad',
                'numero_exterior' => '3000',
                'numero_interior' => null,
                'colonia' => 'Copilco',
                'id_codigo_postal' => 2, // 04000 Coyoacán
                'referencias' => 'Frente a la Universidad',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'calle' => 'Paseo Tollocan',
                'numero_exterior' => '1254',
                'numero_interior' => 'Local 5',
                'colonia' => 'Centro',
                'id_codigo_postal' => 3, // 50000 Toluca
                'referencias' => 'Plaza comercial',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'calle' => 'Av. Chapultepec',
                'numero_exterior' => '500',
                'numero_interior' => 'A',
                'colonia' => 'Americana',
                'id_codigo_postal' => 4, // 44100 Guadalajara
                'referencias' => 'Esquina con López Cotilla',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'calle' => 'Av. Constitución',
                'numero_exterior' => '720',
                'numero_interior' => 'Piso 3',
                'colonia' => 'Centro',
                'id_codigo_postal' => 5, // 64000 Monterrey
                'referencias' => 'Edificio corporativo',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('direcciones')->insert($direcciones);
    }
}
