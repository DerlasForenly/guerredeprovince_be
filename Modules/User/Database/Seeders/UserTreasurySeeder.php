<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Resource\Models\Resource;
use Modules\User\Models\User;
use Modules\User\Models\UserTreasury;

class UserTreasurySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $resources = Resource::all();

        foreach ($users as $user) {
            foreach ($resources as $resource) {
                UserTreasury::factory()
                    ->user($user->id)
                    ->resource($resource->id)
                    ->create();
            }
        }
    }
}
