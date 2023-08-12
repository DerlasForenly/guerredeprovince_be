<?php

namespace Modules\Region\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Region\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ukraine_regions = [
            'kyiv-city',
            'kyiv',
            'poltava',
            'kharkiv',
            'donetsk',
            'odesa',
            'luhansk',
            'cherkasy',
            'ivano-frankivsk',
            'lviv',
            'volyn',
            'zakarpattia',
            'rivne',
            'mykolaiv',
            'crimea',
            'chernivtsi',
            'zhytomyr',
            'chernihiv',
            'khmelnytskyi',
            'ternopil',
            'sumy',
            'vinnytsia',
            'dnipro',
            'zaporizhia',
            'kropyvnytskyi',
            'kherson',
        ];

        foreach ($ukraine_regions as $region) {
            Region::factory()
                ->name($region)
                ->create();
        }
    }
}
