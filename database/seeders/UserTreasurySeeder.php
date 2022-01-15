<?php

namespace Database\Seeders;

use App\Models\Resource;
use App\Models\User;
use App\Models\UserTreasury;
use Illuminate\Database\Seeder;

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
