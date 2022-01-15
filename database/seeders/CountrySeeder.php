<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Country;
use App\Models\Government;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::factory()
            ->name('Holy Ukrainian Reich')
            ->description("Ukraine is a country in Eastern Europe")
            ->nation(1)
            ->create();

        Country::factory()
            ->name('Poland')
            ->description("Wanna know how I got this borders?")
            ->nation(2)
            ->create();
    }
}
