<?php

namespace Modules\Resource\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Resource\Models\Resource;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach (Resource::RESOURCES as $resourceName) {
            Resource::factory()
                ->name($resourceName)
                ->create();
        }
    }
}

