<?php

namespace Modules\User\Models\Relationships\User;

use Modules\Business\Models\Business;
use Modules\Request\Models\Request;
use Modules\Treasury\Models\UserTreasury;

trait HasMany
{
    public function resources(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UserTreasury::class, 'user_id');
    }

    public function businesses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Business::class, 'user_id');
    }

    public function requests(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Request::class, 'user_id');
    }

    public function treasuries(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UserTreasury::class, 'user_id');
    }
}
