<?php

namespace Modules\Government\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Government\Models\GovernmentType;

class GovernmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GovernmentType::factory()
            ->name('Republic')
            ->create();
    }
}
