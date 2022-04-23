<?php

namespace Modules\Country\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Country\Models\CountryStaff;

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
            ->user(2)
            ->country(1)
            ->position(1)
            ->create();

        CountryStaff::factory()
            ->user(3)
            ->country(1)
            ->position(3)
            ->create();
    }
}
