<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Super administrador',
            'email' => 'superadmin@superadmin.com',
            'password' => bcrypt('irvrclrt1985.'),
        ]);

        $user -> assignRole('Superadmin');
    }
}
