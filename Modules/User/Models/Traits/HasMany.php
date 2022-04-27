<?php

namespace Modules\User\Models\Traits;

use Modules\Business\Models\Business;
use Modules\Request\Models\Request;
use Modules\Treasury\Models\UserTreasury;

trait HasMany
{
    public function resources(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UserTreasury::class);
    }

    public function businesses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Business::class);
    }

    public function requests(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Request::class, 'sender_id');
    }

    public function treasuries(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->HasMany(UserTreasury::class);
    }
}
