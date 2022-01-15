<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Business::factory()
            ->count(5)
            ->create();

        Business::factory()
            ->count(3)
            ->corporation(1)
            ->create();
    }
}
