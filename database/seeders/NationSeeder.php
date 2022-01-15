<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Nation;

class NationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nation::factory()
            ->name('UA')
            ->create();

        Nation::factory()
            ->count(10)
            ->create();

        // DB::table('nations')->insert([
        //     'name' => Str::random(10),
        // ]);
    }
}
