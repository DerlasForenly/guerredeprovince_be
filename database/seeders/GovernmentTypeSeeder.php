<?php

namespace Database\Seeders;

use App\Models\GovernmentType;
use Illuminate\Database\Seeder;

class GovernmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GovernmentType::factory()
            ->name('Republic')
            ->create();
    }
}
