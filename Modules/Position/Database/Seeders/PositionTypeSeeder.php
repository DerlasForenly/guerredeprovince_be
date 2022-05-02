<?php

namespace Modules\Position\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Position\Models\PositionType;

class PositionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (PositionType::POSITION_TYPES as $positionType) {
            PositionType::factory()
                ->name($positionType)
                ->create();
        }
    }
}
