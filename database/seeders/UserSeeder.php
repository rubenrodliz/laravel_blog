<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
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
            'password' => bcrypt('0123456789'),
            'image' => 'https://i.pravatar.cc/300?u=' . Str::random(10),
        ]);

        // Asignar los roles Administrador y usuario
        $roles = Role::all();
        $roles->each(function ($role) use ($adminUser) {
            $adminUser->roles()->attach($role->id);
        });
    }
}
