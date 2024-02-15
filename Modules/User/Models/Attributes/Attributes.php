<?php

namespace Modules\User\Models\Attributes;

use Modules\User\Models\User;

/**
 * @TODO I think I should remove all this attributes later
 * @mixin User
 */
trait Attributes
{
    public function getJobAttribute(): ?array
    {
        if (!$this->employee) return null;

        $business = $this->employee->business;

        if (!$business) {
            return null;
        }

        return [
            'id' => $business->id,
            'name' => $business->name,
            'salary' => $this->salary,
            'salary_type' => $this->salary_type
        ];
    }

    /**
     * @return bool
     */
    public function getBusyAttribute(): bool
    {
        return $this->inProcessMove || $this->inProcessWork || $this->inProcessWar;
    }

    public function getCitizenshipAttribute(): ?array
    {
        $country = $this->country()->first();

        if (!$country) {
            return null;
        }

        return [
            'id' => $country->id,
            'name' => $country->name,
        ];
    }

    public function getPartyAttribute(): ?array
    {
        $party = $this->political_party()->first();

        if (!$party) {
            return null;
        }

        return [
            'id' => $party->id,
            'name' => $party->name,
            'tag' => $party->tag,
        ];
    }

    public function getSalaryTypeAttribute(): int
    {
        if ($this->employee->salary !== null) {
            return $this->employee->salary_type_id;
        } else {
            return $this->employee->business->salary_type_id;
        }
    }

    public function getSalaryAttribute(): int
    {
        if ($this->employee->salary !== null) {
            return $this->employee->salary;
        } else {
            return $this->employee->business->salary;
        }
    }

    public function getLevelAttribute(): int
    {
        return 1;
    }
}
