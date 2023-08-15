<?php

namespace Modules\Business\Services;

use Carbon\Carbon;
use http\Encoding\Stream\Enbrotli;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Modules\Business\Models\Business;
use Modules\Business\Models\SalaryType;
use Modules\Resource\Models\Resource;
use Modules\Treasury\Models\BusinessTreasury;
use Modules\Treasury\Models\Treasury\Treasury;
use Modules\Treasury\Models\UserTreasury;
use Modules\Treasury\Services\TransactionService;
use Modules\User\Models\User;

/**
 * Class SalaryService
 *
 * @TODO Add personal salary functional
 */
class SalaryService
{
    /**
     * @var Business
     */
    protected Business $business;

    /**
     * @var Treasury
     */
    protected Treasury $businessResourceTreasury;

    /**
     * @var Treasury
     */
    protected Treasury $businessMoneyTreasury;

    /**
     * User treasury for specified resource
     *
     * @var Treasury
     */
    protected Treasury $userTreasury;

    /**
     * Work time, has minimum and maximum
     *
     * @var int
     */
    protected int $time;

    /**
     * @var \Modules\Treasury\Services\TransactionService
     */
    protected TransactionService $transactionService;

    /**
     * @param User $user
     * @throws \Exception
     */
    public function __construct(
        private User $user,
    ) {
        Log::info('Hello, constructor');
        $this->user->refresh();

        if (!$this->user->inProcessWork) {
            throw new \Exception('There is no processed work.');
        }

        $this->transactionService = app(TransactionService::class);
        $this->business           = $this->user->employee->business;
        $this->time               = $this->getWorkTime();
        $salaryTypeId             = $this->business->salary_type_id;

        $this->businessMoneyTreasury    = $this->getBusinessTreasury(Resource::MONEY_ID);
        $this->businessResourceTreasury = $this->getBusinessTreasury($this->business->resource_id);

        $this->userTreasury = match (true) {
            SalaryType::RESOURCE_ID === $salaryTypeId => $this->getUserTreasury($this->business->resource_id),
            SalaryType::MONEY_ID === $salaryTypeId => $this->getUserTreasury(Resource::MONEY_ID),
        };
    }

    /**
     * @return int
     */
    public function getWorkTime(): int
    {
        $diff = Carbon::now()->diffInMinutes($this->user->inProcessWork->created_at);

        return min($diff, $this->user->inProcessWork->time);
    }

    /**
     * @return void
     */
    public function sendCompensation(): void
    {
        Log::info('Send compensation.');
        $this->sendExp();
        $this->sendSalary();
    }

    /**
     * @return void
     */
    protected function sendExp(): void
    {
        $exp                 = $this->countExp($this->time);
        $this->business->exp += $exp;
        $this->user->exp     += $exp;

        $this->business->save();
        $this->user->save();
    }

    /**
     * @return void
     */
    protected function sendSalary(): void
    {
        match (true) {
            SalaryType::RESOURCE_ID === $this->business->salary_type_id => $this->sendResources(),
            SalaryType::MONEY_ID === $this->business->salary_type_id => $this->sendMoney(),
        };
    }

    /**
     * @return void
     */
    protected function sendResources(): void
    {
        $this->transactionService->sendResourcesFromGame(
            $this->businessResourceTreasury,
            $this->time / 100 * (100 - $this->business->salary)
        );
        $this->transactionService->sendResourcesFromGame(
            $this->businessResourceTreasury,
            $this->time / 100 * $this->business->salary
        );
    }

    /**
     * @return void
     */
    protected function sendMoney(): void
    {
        /**
         * @TODO Check what happens if it will not enough money to pay the salary
         */
        $this->transactionService->sendResourcesFromGame(
            $this->businessResourceTreasury,
            $this->time
        );

        $this->transactionService->sendResources(
            $this->businessMoneyTreasury,
            $this->businessResourceTreasury,
            $this->business->salary
        );
    }

    /**
     * @param int $time
     * @return int
     */
    protected function countExp(int $time): int
    {
        /**
         * @TODO Exp count formula
         */
        return 15;
    }

    protected function getBusinessTreasury(int $resource_id): BusinessTreasury
    {
        return BusinessTreasury::firstOrCreate([
            'business_id' => $this->business->id,
            'resource_id' => $resource_id,
        ]);
    }

    protected function getUserTreasury(int $resource_id): UserTreasury
    {
        return UserTreasury::firstOrCreate([
            'user_id'     => $this->user->id,
            'resource_id' => $resource_id,
        ]);
    }
}
