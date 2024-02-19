<?php

namespace Modules\Country\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Country\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Country::factory()
            ->name('Holy Ukrainian Reich')
            ->description("Ukraine is a country in Eastern Europe")
            ->nation(1)
            ->create();

        Country::factory()
            ->name('Storm Shadow Launcher')
            ->description("Wanna know how I got this borders?")
            ->nation(2)
            ->create();

        Country::factory()
            ->name('Ben Wallace Thankland')
            ->description("Wanna know how I got this borders?")
            ->nation(1)
            ->create();
    }
}
