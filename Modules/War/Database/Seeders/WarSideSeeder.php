<?php

namespace Modules\War\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarSideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('war_sides')->insert([
            'side' => 'Aggressor',
        ]);

        DB::table('war_sides')->insert([
            'side' => 'Defense',
        ]);

        DB::table('war_sides')->insert([
            'side' => 'Aggressor support',
        ]);

        DB::table('war_sides')->insert([
            'side' => 'Defense support',
        ]);
    }
}
