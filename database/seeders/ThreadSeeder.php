<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Thread;
use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Thread::factory(5)
            ->has(
                Post::factory(10)
            )
            ->create();
    }
}
