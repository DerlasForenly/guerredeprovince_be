<?php

namespace Database\Seeders;

use App\Models\SalaryType;
use Illuminate\Database\Seeder;

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
            ->name('money')
            ->create();
        SalaryType::factory()
            ->name('resource')
            ->create();
    }
}
