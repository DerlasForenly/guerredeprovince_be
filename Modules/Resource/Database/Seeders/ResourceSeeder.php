<?php

namespace Modules\Resource\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resources')->insert([
            'resource' => 'Gold'
        ]);

        DB::table('resources')->insert([
            'resource' => 'Money'
        ]);

        DB::table('resources')->insert([
            'resource' => 'Ore'
        ]);

        DB::table('resources')->insert([
            'resource' => 'Oil'
        ]);

        DB::table('resources')->insert([
            'resource' => 'Diamonds'
        ]);

        DB::table('resources')->insert([
            'resource' => 'Uran'
        ]);

        DB::table('resources')->insert([
            'resource' => 'Helium'
        ]);
    }
}

