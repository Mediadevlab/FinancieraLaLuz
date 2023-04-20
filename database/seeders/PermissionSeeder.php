<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            //permisoso
            'permission_index', 
            'permission_create', 
            'permission_show', 
            'permission_edit', 
            'permission_destroy',

             //roles
             'role_index', 
             'role_create', 
             'role_show', 
             'role_edit', 
             'role_destroy', 

             //usuarios
             'user_index', 
             'user_create', 
             'user_show', 
             'user_edit', 
             'user_destroy',
             
             //clientes
             'cliente_index', 
             'cliente_create', 
             'cliente_show', 
             'cliente_edit', 
             'cliente_destroy',

             //prestamos
             'prestamo_index', 
             'prestamo_create', 
             'prestamo_show', 
             'prestamo_edit', 
             'prestamo_destroy',

             //comisiones
             'comision_index', 
             'comision_create', 
             'comision_show', 
             'comision_edit', 
             'comision_destroy',

             //cobros
             'cobro_index', 
             'cobro_create', 
             'cobro_show', 
             'cobro_edit', 
             'cobro_destroy',

             //reportes
             'reporte_index', 
             'reporte_create', 
             'reporte_show', 
             'reporte_edit', 
             'reporte_destroy',

             //empleados
             'empleado_index', 
             'empleado_create', 
             'empleado_show', 
             'empleado_edit', 
             'empleado_destroy',

             //bitacora
             'bitacora_index', 
             'bitacora_create', 
             'bitacora_show', 
             'bitacora_edit', 
             'bitacora_destroy', 
        ];

        foreach($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}
