<?php

namespace Modules\GamePrice\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\GamePrice\Models\GamePrice;

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
