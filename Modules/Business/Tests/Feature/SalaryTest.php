<?php

namespace Modules\Business\Tests\Feature;

use Modules\Business\Models\Business;
use Modules\Business\Models\Employee;
use Modules\Resource\Models\Resource;
use Modules\Treasury\Models\BusinessTreasury;
use Modules\Treasury\Models\UserTreasury;
use Modules\User\Models\User;
use Tests\TestCase;

class SalaryTest extends TestCase
{
//    /**
//     * A basic unit test example.
//     *
//     * @return void
//     */
//    public function testEarningSalary(): void
//    {
//        $user     = User::factory()->create();
//        $business = Business::factory()->create();
//
//        $userTreasury     = UserTreasury::factory()
//            ->user($user->id)
//            ->resource(Resource::GOLD)
//            ->create();
//
//        $businessTreasury = BusinessTreasury::factory()
//            ->business($business->id)
//            ->resource(Resource::GOLD)
//            ->create();
//
//        $employee = Employee::factory()
//            ->user($user->id)
//            ->business($business->id)
//            ->create();
//
//
//        $this->assertTrue(true);
//
//        $user->delete();
//        $business->delete();
//    }
}
