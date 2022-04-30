<?php

namespace Modules\Treasury\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller;
use Modules\User\Models\User;

class UserTreasuryController extends Controller
{
    public function __invoke(User $user): Collection
    {
        return $user->treasuries()->get();
    }
}
