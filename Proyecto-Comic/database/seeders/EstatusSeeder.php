<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estatuses = [
            [
                'nombre' => 'Activo',
                'descripcion' => 'Elemento activo en el sistema',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Inactivo',
                'descripcion' => 'Elemento inactivo en el sistema',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Pendiente',
                'descripcion' => 'Elemento pendiente de revisión',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Eliminado',
                'descripcion' => 'Elemento marcado como eliminado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('estatus')->insert($estatuses);
    }
}
