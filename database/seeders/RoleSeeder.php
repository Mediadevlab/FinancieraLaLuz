<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Superadmin',
            'Administrador',
            'Gestor de Préstamos',
            'Staff',
            'Usuario'
        ];

        foreach($roles as $role){
            Role::create(['name' => $role]);
        }
    }
}
