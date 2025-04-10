<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos = [
            [
                'nombre' => 'crear_usuarios',
                'descripcion' => 'Permite crear nuevos usuarios en el sistema',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'editar_usuarios',
                'descripcion' => 'Permite editar usuarios existentes',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'eliminar_usuarios',
                'descripcion' => 'Permite eliminar usuarios del sistema',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'gestionar_productos',
                'descripcion' => 'Permite crear, editar y eliminar productos',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'realizar_ventas',
                'descripcion' => 'Permite registrar ventas en el sistema',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'gestionar_inventario',
                'descripcion' => 'Permite ajustar el inventario de productos',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'generar_reportes',
                'descripcion' => 'Permite generar reportes del sistema',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'ver_dashboard',
                'descripcion' => 'Permite ver el dashboard principal',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('permisos')->insert($permisos);
    }
}
