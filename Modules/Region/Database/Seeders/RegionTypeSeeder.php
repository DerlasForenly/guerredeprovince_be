<?php

namespace Modules\Region\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Region\Models\RegionType;

class RegionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (RegionType::REGION_TYPES as $regionType) {
            RegionType::factory()
                ->name($regionType)
                ->create();
        }
    }
}
