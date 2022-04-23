<?php

namespace Modules\User\Models\Traits;

use Modules\User\Models\User;

/**
 * @mixin User
 */
trait Attributes
{
    public function getJobAttribute()
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

    public function getBusyAttribute()
    {
        return (boolean)$this->action()->first();
    }

    public function getCitizenshipAttribute()
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

    public function getPartyAttribute()
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

    public function getSalaryTypeAttribute()
    {
        if ($this->employee->salary !== null) {
            return $this->employee->salary_type_id;
        } else {
            return $this->employee->business->salary_type_id;
        }
    }

    public function getSalaryAttribute()
    {
        if ($this->employee->salary !== null) {
            return $this->employee->salary;
        } else {
            return $this->employee->business->salary;
        }
    }
}
