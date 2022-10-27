<?php

namespace Modules\Newspaper\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Newspaper\Models\Article;

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
        Article::factory()->count(10)->create();
    }
}
