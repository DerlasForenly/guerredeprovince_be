<?php

namespace App\Http\Controllers\User\Traits;

use App\Models\User;

trait IndexController
{
    public function index()
    {
        return User::all();
    }
}
