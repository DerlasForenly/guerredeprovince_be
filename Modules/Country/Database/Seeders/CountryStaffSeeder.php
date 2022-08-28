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
    public function run()
    {
        CountryStaff::factory()
            ->user(1)
            ->country(1)
            ->position(Position::COUNTRY_LEADER_ID)
            ->create();

        CountryStaff::factory()
            ->user(2)
            ->country(1)
            ->position(Position::MINISTER_OF_SOCIAL_ID)
            ->create();
    }
}
