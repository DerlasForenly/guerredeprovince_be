<?php

namespace Modules\Business\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Business\Models\SalaryType;
use Modules\Business\Services\SalaryService;
use Modules\User\Models\User;

/**
 * Class BusinessResource
 *
 * @mixin \Modules\Business\Models\Business
 */
class BusinessResource extends JsonResource
{
    protected SalaryService $salaryService;

    /**
     * @throws \Exception
     */
    public function toArray($request): array
    {
        /**
         * @var User $user
         */
        $user                = auth()->user();
        $this->salaryService = new SalaryService($user);

        return [
            'id'              => $this->id,
            'name'            => $this->name,
            'owner'           => [
                'id'       => $this->user_id,
                'nickname' => $this->user->nickname,
            ],
            'description'     => $this->description,
            'emblem'          => $this->emblem,
            'resource'        => [
                'id'   => $this->resource_id,
                'name' => $this->resourceType->name,
            ],
            'region'          => [
                'id'     => $this->region_id,
                'name'   => $this->region->name,
                'emblem' => $this->region->emblem,
            ],
            'salary'          => $this->salary(),
            'expected_salary' => $this->expectedSalary(),
            'exp'             => $this->exp,
            'lvl'             => $this->level,
            'corporation'     => $this->corporation_id ? [
                'id'   => $this->corporation_id,
                'name' => $this->corporation->name,
            ] : null,
        ];
    }

    /**
     * @return string
     */
    protected function salary(): string
    {
        return $this->salary_type_id === SalaryType::RESOURCE_ID ? $this->salary . '%' : $this->salary . 'G';
    }

    /**
     * @return string
     */
    protected function expectedSalary(): string
    {
        return $this->salary_type_id === SalaryType::RESOURCE_ID ?
            $this->salaryService->countExpectedSalary($this->salary) :
            $this->salary;
    }
}