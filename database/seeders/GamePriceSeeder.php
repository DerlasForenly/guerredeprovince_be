<?php

namespace Database\Seeders;

use App\Models\GamePrice;
use Illuminate\Database\Seeder;

class GamePriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GamePrice::factory()
            ->name('Create factory')
            ->create();

        GamePrice::factory()
            ->name('Create political party')
            ->create();
    }
}
