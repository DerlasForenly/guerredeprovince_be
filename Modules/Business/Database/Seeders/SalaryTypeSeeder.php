<?php

namespace Modules\Business\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Business\Models\SalaryType;

class SalaryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SalaryType::factory()
            ->name(SalaryType::MONEY)
            ->create();
        SalaryType::factory()
            ->name(SalaryType::RESOURCE)
            ->create();
    }
}
