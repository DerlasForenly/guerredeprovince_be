<?php

namespace Modules\Business\Services;

use Carbon\Carbon;
use Modules\Business\Models\Business;
use Modules\Business\Models\SalaryType;
use Modules\Resource\Models\Resource;
use Modules\Resource\Services\TransactionService;
use Modules\Treasury\Models\Treasury\Treasury;
use Modules\User\Models\User;

class SalaryService
{
    /**
     * @var Business
     */
    private Business $business;

    /**
     * @var Treasury|null
     */
    private ?Treasury $businessTreasury;

    /**
     * User treasury for specified resource
     *
     * @var Treasury|null
     */
    private ?Treasury $userTreasury;

    /**
     * Work time, has minimum and maximum
     *
     * @var int
     */
    private int $time;

    /**
     * @param User $user
     */
    public function __construct(private User $user)
    {
        $this->business = $this->user->employee->business;
        $this->time = $this->getWorkTime();

        switch ($this->business->salary_type_id) {
            case SalaryType::RESOURCE_ID:
                $this->setTreasuries($this->business->resource_id);
                break;
            case SalaryType::MONEY_ID:
                $this->setTreasuries(Resource::MONEY_ID);
                break;
        }
    }

    /**
     * @return int
     */
    private function getWorkTime(): int
    {
        $diff = Carbon::now()->diffInMinutes($this->user->action->created_at);
        return min($diff, $this->user->action->time);
    }

    /**
     * @return array
     */
    public function sendCompensation(): array
    {
        return [
            'time'      => $this->time,
            'exp'       => $this->sendExp(),
            'resources' => $this->sendSalary(),
        ];
    }

    /**
     * @return int
     */
    private function sendExp(): int
    {
        return $this->countExp($this->time);
    }

    /**
     * @return int
     */
    private function sendSalary(): int
    {
        switch ($this->business->salary_type_id) {
            case SalaryType::RESOURCE_ID:
                $resources = $this->countResources($this->time);
                TransactionService::send($this->businessTreasury, $this->userTreasury, $resources);
                return $resources;
            case SalaryType::MONEY_ID:
                $resources = $this->countMoney($this->time);
                TransactionService::send($this->businessTreasury, $this->userTreasury, $resources);
                return $resources;
            default:
                return 0;
        }
    }

    /**
     * @param int $time
     * @return int
     */
    private function countResources(int $time): int
    {
        return $time * 15;
    }

    /**
     * @param int $time
     * @return int
     */
    private function countMoney(int $time): int
    {
        return $time * 150;
    }

    /**
     * @param int $time
     * @return int
     */
    private function countExp(int $time): int
    {
        return $time * 5;
    }

    /**
     * @param int $id
     * @return void
     */
    private function setTreasuries(int $resource_id): void
    {
        $this->businessTreasury = $this->business
            ->treasuries()
            ->where('resource_id', $resource_id)
            ->first();

        $this->userTreasury = $this->user
            ->treasuries()
            ->where('resource_id', $resource_id)
            ->first();
    }
}
