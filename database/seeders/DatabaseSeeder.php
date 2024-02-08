<?php

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ThreadSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(ThreadSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        // Crear usuarios adicionales y asignarles el rol de usuario común de manera opcional
        /*User::factory(10)->create()->each(function ($user) use ($roleUser) {
            $user->roles()->attach($roleUser->id);
        });*/
    }
}

