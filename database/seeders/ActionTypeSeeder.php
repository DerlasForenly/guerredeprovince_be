<?php

namespace Database\Seeders;

use App\Models\ActionType;
use Illuminate\Database\Seeder;

class ActionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActionType::factory()
            ->name('work')
            ->create();
        ActionType::factory()
            ->name('fight')
            ->create();
        ActionType::factory()
            ->name('move')
            ->create();
    }
}
