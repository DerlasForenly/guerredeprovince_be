<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\User\Models\User;

class ShowController extends Controller
{
    /**
     * Show the specified resource.
     *
     * @param User $user
     * @return User
     */
    public function __invoke(User $user): User
    {
        return $user;
    }
}
