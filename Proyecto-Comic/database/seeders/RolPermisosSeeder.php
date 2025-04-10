<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Asignar todos los permisos al administrador (rol 1)
        $permisosAdmin = [];
        for ($i = 1; $i <= 8; $i++) {
            $permisosAdmin[] = [
                'id_rol' => 1, // Administrador
                'id_permiso' => $i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // Permisos para el vendedor (rol 2)
        $permisosVendedor = [
            [
                'id_rol' => 2, // Vendedor
                'id_permiso' => 5, // realizar_ventas
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_rol' => 2, // Vendedor
                'id_permiso' => 8, // ver_dashboard
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        // Permisos para el almacenista (rol 3)
        $permisosAlmacenista = [
            [
                'id_rol' => 3, // Almacenista
                'id_permiso' => 4, // gestionar_productos
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_rol' => 3, // Almacenista
                'id_permiso' => 6, // gestionar_inventario
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_rol' => 3, // Almacenista
                'id_permiso' => 8, // ver_dashboard
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        // Combinar todos los permisos
        $rolPermisos = array_merge($permisosAdmin, $permisosVendedor, $permisosAlmacenista);

        DB::table('rol_permisos')->insert($rolPermisos);
    }
}
