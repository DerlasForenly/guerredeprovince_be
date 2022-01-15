<?php

namespace Database\Seeders;

use App\Models\CountryStaff;
use Illuminate\Database\Seeder;

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
