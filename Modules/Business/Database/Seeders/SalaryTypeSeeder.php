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
        foreach (SalaryType::SALARY_TYPES as $salaryType) {
            SalaryType::factory()
                ->name($salaryType)
                ->create();
        }
    }
}
