<?php

namespace Modules\Action\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Action\Models\ActionType;

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
