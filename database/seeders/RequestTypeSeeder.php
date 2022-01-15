<?php

namespace Database\Seeders;

use App\Models\RequestType;
use Illuminate\Database\Seeder;

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
