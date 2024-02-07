<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear roles
        $roleUser = Role::factory()->create([
            'name' => 'user'
        ]);
        $roleAdmin = Role::factory()->create([
            'name' => 'admin'
        ]);

        // Crear un usuario administrador específico
        $adminUser = User::factory()->create([
            'name' => 'Admin',
            'email' => 'rubenrodliz@gmail.com',
            // Asegúrate de hashear la contraseña
            'password' => bcrypt('0123456789')
        ]);

        // Asignar el rol de administrador al usuario creado
        $adminUser->roles()->attach($roleAdmin->id, ['created_at' => now(), 'updated_at' => now()]);

        // Crear usuarios adicionales y asignarles el rol de usuario común de manera opcional
        /*User::factory(10)->create()->each(function ($user) use ($roleUser) {
            $user->roles()->attach($roleUser->id);
        });*/
    }
}

