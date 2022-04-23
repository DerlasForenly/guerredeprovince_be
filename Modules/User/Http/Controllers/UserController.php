<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\User\Http\Controllers\Traits\IndexController;
use Modules\User\Http\Controllers\Traits\ShowController;
use Modules\User\Models\User;

class UserController extends Controller
{
    use IndexController,
        ShowController;

    public function factories(User $user)
    {
        return $user->factories;
    }
}
