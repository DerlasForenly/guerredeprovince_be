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
    public function run(): void
    {
        foreach (RequestType::REQUEST_TYPES as $requestType) {
            RequestType::factory()
                ->name($requestType)
                ->create();
        }
    }
}
