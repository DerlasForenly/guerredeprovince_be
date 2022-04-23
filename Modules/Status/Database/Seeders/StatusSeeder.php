<?php

namespace Modules\Status\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'name' => 'Active',
        ]);

        DB::table('statuses')->insert([
            'name' => 'Inactive',
        ]);

        DB::table('statuses')->insert([
            'name' => 'In process',
        ]);

        DB::table('statuses')->insert([
            'name' => 'Ended',
        ]);
    }
}
