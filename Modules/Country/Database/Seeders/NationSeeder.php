<?php

namespace Modules\Country\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Country\Models\Nation;

class NationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nation::factory()
            ->name('UA')
            ->create();

        Nation::factory()
            ->count(10)
            ->create();
    }
}
