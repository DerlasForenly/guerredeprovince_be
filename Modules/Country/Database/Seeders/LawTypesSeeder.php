<?php

namespace Modules\Country\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Country\Models\LawType;

class LawTypesSeeder extends Seeder
{
    public function run(): void
    {
        foreach (LawType::TYPES as $name) {
            LawType::create([
                'name' => $name,
            ]);
        }
    }
}