<?php

namespace Modules\User\Models\Traits;

use Modules\Action\Models\Action;
use Modules\Army\Models\Army;
use Modules\Business\Models\Employee;
use Modules\Country\Models\CountryStaff;

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

    public function action()
    {
        return $this->hasOne(Action::class);
    }

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }
}
