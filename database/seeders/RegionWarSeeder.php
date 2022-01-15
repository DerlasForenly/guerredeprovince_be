<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\RegionWar;
use App\Models\War;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
