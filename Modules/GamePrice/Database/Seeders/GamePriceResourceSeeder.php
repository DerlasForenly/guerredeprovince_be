<?php

namespace Modules\GamePrice\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\GamePrice\Models\GamePriceResource;

class GamePriceResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GamePriceResource::factory()
            ->values(1, 1, 50)
            ->create();

        GamePriceResource::factory()
            ->values(1, 2, 50)
            ->create();

        GamePriceResource::factory()
            ->values(2, 1, 50)
            ->create();
    }
}
