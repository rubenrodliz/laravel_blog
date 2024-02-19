<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Thread;
use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Thread::factory(10)
            ->has(
                Comment::factory(10)
            )
            ->create();
    }
}
