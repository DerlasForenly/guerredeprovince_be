<?php

namespace Modules\Country\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Country\Models\ElectionType;
use Modules\Country\Models\LawType;

class ElectionTypesSeeder extends Seeder
{
    public function run(): void
    {
        foreach (ElectionType::TYPES as $name) {
            ElectionType::create([
                'name' => $name,
            ]);
        }
    }
}