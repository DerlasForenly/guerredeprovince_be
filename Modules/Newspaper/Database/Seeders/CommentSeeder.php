<?php

namespace Modules\Newspaper\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Newspaper\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Comment::factory()
            ->user(1)
            ->article(1)
            ->count(3)
            ->create();

        Comment::factory()
            ->user(2)
            ->article(1)
            ->count(3)
            ->create();

        Comment::factory()
            ->user(3)
            ->article(1)
            ->count(3)
            ->create();
    }
}