<?php

namespace Modules\Resource\Tests\Feature;

use Modules\Resource\Models\Resource;
use Modules\Treasury\Models\UserTreasury;
use Modules\Treasury\Services\TransactionService;
use Modules\User\Models\User;
use Tests\TestCase;

class TransactionTest extends TestCase
{
    public function testTransaction()
    {
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $treasury1 = UserTreasury::factory()
            ->for($user1)
            ->resource(Resource::GOLD_ID)
            ->create();
        $treasury2 = UserTreasury::factory()
            ->for($user2)
            ->resource(Resource::GOLD_ID)
            ->create();
        $treasury3 = UserTreasury::factory()
            ->for($user1)
            ->resource(Resource::MONEY_ID)
            ->create();
        $treasury4 = UserTreasury::factory()
            ->for($user2)
            ->resource(Resource::MONEY_ID)
            ->create();

        TransactionService::send($treasury1, $treasury2, 50);

        $treasury1->fresh();
        $treasury2->fresh();
        $treasury3->fresh();
        $treasury4->fresh();

        $this->assertEquals(50, $treasury1->quantity);
        $this->assertEquals(150, $treasury2->quantity);
        $this->assertEquals(100, $treasury3->quantity);
        $this->assertEquals(100, $treasury4->quantity);

        $user1->delete();
        $user2->delete();
    }
}
