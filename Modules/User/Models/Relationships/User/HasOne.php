<?php

namespace Modules\User\Models\Relationships\User;

use Modules\Action\Models\Action;
use Modules\Army\Models\Army;
use Modules\Business\Models\Employee;
use Modules\Country\Models\CountryStaff;
use Modules\Party\Models\PoliticalPartyStaff;

trait HasOne
{
    public function country_staff(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(CountryStaff::class);
    }

    public function army(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Army::class);
    }

    public function action(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Action::class);
    }

    public function employee(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Employee::class);
    }

    public function politicalPartyStaff(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(PoliticalPartyStaff::class, 'user_id');
    }
}
