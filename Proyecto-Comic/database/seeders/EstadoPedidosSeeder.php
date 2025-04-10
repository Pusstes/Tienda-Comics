<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class EstadoPedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            [
                'nombre' => 'Pendiente',
                'slug' => Str::slug('Pendiente'),
                'descripcion' => 'Pedido registrado pero no enviado al proveedor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Enviado',
                'slug' => Str::slug('Enviado'),
                'descripcion' => 'Pedido enviado al proveedor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Confirmado',
                'slug' => Str::slug('Confirmado'),
                'descripcion' => 'Pedido confirmado por el proveedor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'En tránsito',
                'slug' => Str::slug('En tránsito'),
                'descripcion' => 'Pedido en camino',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Entregado',
                'slug' => Str::slug('Entregado'),
                'descripcion' => 'Pedido recibido en almacén',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Cancelado',
                'slug' => Str::slug('Cancelado'),
                'descripcion' => 'Pedido cancelado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('estado_pedidos')->insert($estados);
    }
}
