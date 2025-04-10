<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Orden de dependencias para los seeders
        $this->call([
            EstatusSeeder::class,            // 1. Estatus (Requerido por casi todas las tablas)
            IdiomasSeeder::class,            // 2. Idiomas
            MonedasSeeder::class,            // 3. Monedas
            EstadosSeeder::class,            // 4. Estados
            CiudadesSeeder::class,           // 5. Ciudades (depende de Estados)
            CodigosPostalesSeeder::class,    // 6. Códigos Postales (depende de Ciudades)
            DireccionesSeeder::class,        // 7. Direcciones (depende de Códigos Postales)
            RolesSeeder::class,              // 8. Roles
            PermisosSeeder::class,           // 9. Permisos
            RolPermisosSeeder::class,        // 10. Asignación de permisos a roles
            PersonasSeeder::class,           // 11. Personas (depende de Direcciones)
            UsuariosSeeder::class,           // 12. Usuarios (depende de Personas y Roles)
            EstadoPedidosSeeder::class,      // 13. Estados de pedidos
            TipoMovimientosSeeder::class,    // 14. Tipos de movimientos
        ]);
    }
}
