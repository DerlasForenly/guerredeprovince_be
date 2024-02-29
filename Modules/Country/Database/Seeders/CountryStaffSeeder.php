<?php

namespace Modules\Country\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Country\Models\CountryStaff;
use Modules\Position\Models\Position;

class CountryStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        CountryStaff::factory()
            ->user(1)
            ->country(1)
            ->position(Position::COUNTRY_LEADER_ID)
            ->create();
    }
}
