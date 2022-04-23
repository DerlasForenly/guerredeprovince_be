<?php

namespace Modules\Request\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Request\Models\RequestType;

class RequestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequestType::factory()
            ->name('Join party')
            ->create();

        RequestType::factory()
            ->name('Join army')
            ->create();

        RequestType::factory()
            ->name('Get citizenship')
            ->create();

        RequestType::factory()
            ->name('Add friend')
            ->create();
    }
}
