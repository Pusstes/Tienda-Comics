<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IdiomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idiomas = [
            [
                'codigo' => 'es',
                'nombre' => 'Español',
                'nativo' => 'Español',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'codigo' => 'en',
                'nombre' => 'Inglés',
                'nativo' => 'English',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'codigo' => 'fr',
                'nombre' => 'Francés',
                'nativo' => 'Français',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'codigo' => 'de',
                'nombre' => 'Alemán',
                'nativo' => 'Deutsch',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'codigo' => 'it',
                'nombre' => 'Italiano',
                'nativo' => 'Italiano',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'codigo' => 'ja',
                'nombre' => 'Japonés',
                'nativo' => '日本語',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('idiomas')->insert($idiomas);
    }
}
