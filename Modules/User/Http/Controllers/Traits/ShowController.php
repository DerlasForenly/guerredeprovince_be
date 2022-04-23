<?php

namespace Modules\User\Http\Controllers\Traits;

use Modules\User\Models\User;

trait ShowController
{
    public function show(User $user)
    {
        return $user;
    }
}
