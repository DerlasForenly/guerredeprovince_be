<?php

namespace Modules\Treasury\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Resource\Models\Resource;
use Modules\Treasury\Models\TradeOffer;
use Modules\User\Models\User;

class TradeOfferSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('nickname', 'Trader1')->first();

        TradeOffer::create([
            'user_id' => 1,
            'resource_id' => Resource::MONEY_ID,
            'quantity' => 1000,
            'price' => 1,
            'isBuying' => false
        ]);

        TradeOffer::create([
            'user_id' => $user->id,
            'resource_id' => Resource::HELIUM_ID,
            'quantity' => 1000,
            'price' => 10,
            'isBuying' => false
        ]);

        TradeOffer::create([
            'user_id' => $user->id,
            'resource_id' => Resource::WOOD_ID,
            'quantity' => 1000,
            'price' => 10,
            'isBuying' => true,
        ]);

        TradeOffer::create([
            'user_id' => $user->id,
            'resource_id' => Resource::MONEY_ID,
            'quantity' => 1000 * 10,
            'price' => 1,
            'isBuying' => true,
        ]);
    }
}