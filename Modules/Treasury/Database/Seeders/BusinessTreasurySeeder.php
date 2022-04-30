<?php

namespace Modules\Treasury\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Business\Models\Business;
use Modules\Resource\Models\Resource;
use Modules\Treasury\Models\BusinessTreasury;
use Modules\Treasury\Models\UserTreasury;
use Modules\User\Models\User;

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
        $resources  = Resource::all();

        foreach ($businesses as $business) {
            foreach ($resources as $resource) {
                BusinessTreasury::factory()
                    ->business($business->id)
                    ->resource($resource->id)
                    ->create();
            }
        }
    }
}
