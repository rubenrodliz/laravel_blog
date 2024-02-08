<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thread>
 */
class ThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'   => User::factory(),
            // Genera una frase única
            'title'     => $title = fake()->unique()->sentence(),
            // Genera un URL a partir del título
            'slug'      => Str::slug($title),
            // Genera un texto de 500 caracteres
            'body'      => fake()->text(500),
        ];
    }
}
