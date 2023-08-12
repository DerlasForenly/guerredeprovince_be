<?php

namespace Modules\Newspaper\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Newspaper\Models\Category;

/**
 * Class CategorySeeder
 */
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach (Category::CATEGORIES as $key => $category) {
            Category::firstOrCreate([
                'id' => $key,
                'name' => $category,
            ]);
        }
    }
}