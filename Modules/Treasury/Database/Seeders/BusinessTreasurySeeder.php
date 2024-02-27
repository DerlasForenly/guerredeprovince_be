<?php

namespace Modules\Treasury\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Business\Models\Business;
use Modules\Treasury\Models\BusinessTreasury;

class BusinessTreasurySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businesses = Business::all();

        foreach ($businesses as $business) {
            BusinessTreasury::factory()
                ->business($business->id)
                ->resource($business->resource_id)
                ->create();
        }
    }
}
