<?php

namespace Modules\Treasury\Http\Controllers;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Treasury\Http\Resources\MyTreasuryResource;
use Modules\User\Models\User;

/**
 *
 */
class UserTreasuryController extends Controller
{
    /**
     * @param \Modules\User\Models\User $user
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke(User $user): AnonymousResourceCollection
    {
        return MyTreasuryResource::collection($user->treasuries()->get());
    }
}
