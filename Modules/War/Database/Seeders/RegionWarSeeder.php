<?php

namespace Modules\War\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\War\Models\RegionWar;

class RegionWarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegionWar::factory()
            ->country(1)
            ->war(1)
            ->side(1)
            ->create();

        RegionWar::factory()
            ->country(2)
            ->war(1)
            ->side(2)
            ->create();
    }
}
