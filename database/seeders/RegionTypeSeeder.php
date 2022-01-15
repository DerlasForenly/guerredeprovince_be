<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('region_types')->insert([
            'type' => 'Region',
        ]);

        DB::table('region_types')->insert([
            'type' => 'Autonomy',
        ]);
    }
}
