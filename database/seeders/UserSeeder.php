<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear un usuario administrador específico
        $adminUser = User::factory()->create([
            'name' => 'Admin',
            'email' => 'rubenrodliz@gmail.com',
            // Asegúrate de hashear la contraseña
            'password' => bcrypt('0123456789')
        ]);

        // Asignar los roles Administrador y usuario
        $roles = Role::all();
        $roles->each(function ($role) use ($adminUser) {
            $adminUser->roles()->attach($role->id);
        });
    }
}
