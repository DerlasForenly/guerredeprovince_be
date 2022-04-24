<?php

namespace Modules\Position\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Position\Models\PositionType;

class PositionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Country Leader',
            'Region Leader',
            'Party Leader',
            'Union Leader',
            'Newspaper Leader',
            'Business Leader',

            'Minister of Defense',
            'Foreign Minister',
            'Prime Minister',
            'Minister of Economy',
            'Ministry of Energy',
            'Ministry of Infrastructure',
            'Minister of Health Protection',
            'Ministry of Social Policy',

            'Head commander of the Army',
            'Leader of the Navy',
            'Leader of the Fround Forces',
            'Leader of the Air Force',

            'Party Secretary',
            'Newspaper Secretary',

            'Member',
            'Deputy',
            'Editor',
            'Moderator',
            'Employee',
        ];

        foreach ($data as $d) {
            PositionType::factory()
                ->name($d)
                ->create();
        }
    }
}
