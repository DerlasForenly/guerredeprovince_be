<?php

namespace Modules\Newspaper\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Newspaper\Models\Article;
use Modules\Newspaper\Models\Newspaper;
use Modules\Newspaper\Models\Subscription;

/**
 * Class NewspaperDatabaseSeeder
 */
class NewspaperDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Newspaper::factory()->count(2)->create();

        Article::factory()
            ->newspaper(1)
            ->count(3)
            ->create();

        Article::factory()
            ->newspaper(2)
            ->count(3)
            ->create();

        Article::factory()
            ->count(3)
            ->create();

        Subscription::factory()
            ->user(1)
            ->newspaper(1)
            ->create();
    }
}
