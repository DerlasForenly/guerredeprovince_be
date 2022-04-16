<?php

namespace App\Http\Controllers\User\Traits;

use App\Models\User;

trait ShowController
{
    public function show(User $user)
    {
        return $user;
    }
}
