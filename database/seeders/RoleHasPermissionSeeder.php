<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Superadmin
        $superadmin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($superadmin_permissions->pluck('id'));

        //Administrador
        $administrador_permissions = $superadmin_permissions->filter(function ($permission) {
            return substr($permission->name, 0, 5) != 'role_' &&
                substr($permission->name, 0, 11) != 'permission_' &&
                substr($permission->name, 0, 9) != 'bitacora_';
        });
        Role::findOrFail(2)->permissions()->sync($administrador_permissions);

        //Gestor de Prestamos
        $gestor_permissions = $superadmin_permissions->filter(function ($permission) {
            return substr($permission->name, 0, 5) != 'user_' &&
                substr($permission->name, 0, 5) != 'role_' &&
                substr($permission->name, 0, 11) != 'permission_' &&
                substr($permission->name, 0, 9) != 'comision_' &&
                substr($permission->name, 0, 6) != 'cobro_' &&
                substr($permission->name, 0, 8) != 'reporte_' &&
                substr($permission->name, 0, 9) != 'empleado_' &&
                substr($permission->name, 0, 9) != 'bitacora_';
        });
        Role::findOrFail(3)->permissions()->sync($gestor_permissions);

        //Staff
        $staff_permissions = $superadmin_permissions->filter(function ($permission) {
            return substr($permission->name, 0, 5) != 'user_' &&
                substr($permission->name, 0, 5) != 'role_' &&
                substr($permission->name, 0, 11) != 'permission_' &&
                substr($permission->name, 0, 9) != 'prestamo_' &&
                substr($permission->name, 0, 9) != 'comision_' &&
                substr($permission->name, 0, 6) != 'cobro_' &&
                substr($permission->name, 0, 8) != 'reporte_' &&
                substr($permission->name, 0, 9) != 'empleado_' &&
                substr($permission->name, 0, 9) != 'bitacora_';
        });
        Role::findOrFail(4)->permissions()->sync($staff_permissions);

        //Usuario
        $usuario_permissions = $superadmin_permissions->filter(function ($permission) {
            return substr($permission->name, 0, 5) != 'user_' &&
                substr($permission->name, 0, 5) != 'role_' &&
                substr($permission->name, 0, 11) != 'permission_' &&
                substr($permission->name, 0, 8) != 'cliente_' &&
                substr($permission->name, 0, 9) != 'prestamo_' &&
                substr($permission->name, 0, 9) != 'comision_' &&
                substr($permission->name, 0, 6) != 'cobro_' &&
                substr($permission->name, 0, 8) != 'reporte_' &&
                substr($permission->name, 0, 9) != 'empleado_' &&
                substr($permission->name, 0, 9) != 'bitacora_';
        });
        Role::findOrFail(5)->permissions()->sync($usuario_permissions);
    }
}
