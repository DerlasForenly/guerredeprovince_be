<?php

namespace Modules\Resource\Tests\Feature;

use Modules\Resource\Models\Resource;
use Modules\Resource\Services\TransactionService;
use Modules\Treasury\Models\UserTreasury;
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

        TransactionService::send($treasury1, $treasury2, 50);

        $treasury1->fresh();
        $treasury2->fresh();

        $this->assertEquals(50, $treasury1->quantity);
        $this->assertEquals(150, $treasury2->quantity);

        $user1->delete();
        $user2->delete();
    }
}
