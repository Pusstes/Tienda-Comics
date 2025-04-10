<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'nombre' => 'Administrador',
                'descripcion' => 'Acceso completo al sistema',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Vendedor',
                'descripcion' => 'Acceso a módulos de ventas e inventario',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Almacenista',
                'descripcion' => 'Acceso a módulos de inventario y pedidos',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Cliente',
                'descripcion' => 'Acceso limitado a su perfil y compras',
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
