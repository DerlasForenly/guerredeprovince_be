<?php

namespace Modules\Country\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Country\Models\GovernmentType;

class GovernmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (GovernmentType::GOVERNMENT_TYPES as $governmentType) {
            GovernmentType::factory()
                ->name($governmentType)
                ->create();
        }
    }
}
