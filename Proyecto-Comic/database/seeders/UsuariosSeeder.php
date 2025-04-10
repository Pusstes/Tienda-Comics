<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [
            [
                'id_persona' => 1,
                'nombre_usuario' => 'admin',
                'contrasena' => Hash::make('admin123'),
                'id_rol' => 1, // Administrador
                'ultima_sesion' => null,
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_persona' => 2,
                'nombre_usuario' => 'vendedor',
                'contrasena' => Hash::make('vendedor123'),
                'id_rol' => 2, // Vendedor
                'ultima_sesion' => null,
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_persona' => 3,
                'nombre_usuario' => 'almacenista',
                'contrasena' => Hash::make('almacenista123'),
                'id_rol' => 3, // Almacenista
                'ultima_sesion' => null,
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_persona' => 4,
                'nombre_usuario' => 'laura_hdz',
                'contrasena' => Hash::make('laura123'),
                'id_rol' => 2, // Vendedor
                'ultima_sesion' => null,
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_persona' => 5,
                'nombre_usuario' => 'roberto_s',
                'contrasena' => Hash::make('roberto123'),
                'id_rol' => 1, // Administrador
                'ultima_sesion' => null,
                'id_estatus' => 1, // Activo
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('usuarios')->insert($usuarios);
    }
}
