<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\User\Models\User;

class UserController extends Controller
{
    public function factories(User $user)
    {
        return $user->factories;
    }
}
