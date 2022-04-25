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
        foreach (ActionType::ACTION_TYPES as $actionType) {
            ActionType::factory()
                ->name($actionType)
                ->create();
        }
    }
}
