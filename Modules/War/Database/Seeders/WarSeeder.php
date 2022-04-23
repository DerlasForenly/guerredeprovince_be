<?php

namespace Modules\War\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\War\Models\War;

class WarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        War::factory()
            ->count(3)
            ->create();
    }
}
