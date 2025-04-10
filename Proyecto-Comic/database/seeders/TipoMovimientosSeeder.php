<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class TipoMovimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipoMovimientos = [
            [
                'nombre' => 'Creación',
                'slug' => Str::slug('Creación'),
                'descripcion' => 'Creación de un nuevo registro',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Modificación',
                'slug' => Str::slug('Modificación'),
                'descripcion' => 'Modificación de un registro existente',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Eliminación',
                'slug' => Str::slug('Eliminación'),
                'descripcion' => 'Eliminación de un registro',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Inicio de sesión',
                'slug' => Str::slug('Inicio de sesión'),
                'descripcion' => 'Usuario inició sesión en el sistema',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Cierre de sesión',
                'slug' => Str::slug('Cierre de sesión'),
                'descripcion' => 'Usuario cerró sesión en el sistema',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('tipo_movimientos')->insert($tipoMovimientos);
    }
}
