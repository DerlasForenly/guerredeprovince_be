<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User\Traits\IndexController;
use App\Http\Controllers\User\Traits\ShowController;
use App\Models\User;

class UserController extends Controller
{
    use IndexController,
        ShowController;

    public function factories(User $user)
    {
        return $user->factories;
    }
}
