<?php

namespace Modules\User\Http\Controllers\Traits;

use Modules\User\Models\User;

trait IndexController
{
    public function index()
    {
        return User::all();
    }
}
