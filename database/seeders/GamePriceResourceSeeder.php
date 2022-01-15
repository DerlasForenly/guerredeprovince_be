<?php

namespace Database\Seeders;

use App\Models\GamePriceResource;
use Illuminate\Database\Seeder;

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
