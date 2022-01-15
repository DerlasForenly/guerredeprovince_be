<?php

namespace Database\Seeders;

use App\Models\War;
use Illuminate\Database\Seeder;

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
