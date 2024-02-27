<?php

namespace Modules\Position\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Position\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Position::POSITIONS as $positionType) {
            Position::factory()
                ->name($positionType)
                ->create();
        }
    }
}
