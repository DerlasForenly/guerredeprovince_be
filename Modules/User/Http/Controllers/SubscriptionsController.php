<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Modules\Newspaper\Http\Resources\NewspaperResource;
use Modules\Newspaper\Models\Newspaper;
use Modules\User\Models\User;

/**
 * Class SubscriptionsController
 */
class SubscriptionsController
{
    /**
     * @param \Modules\User\Models\User $user
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke(User $user): AnonymousResourceCollection
    {
        $newspaperIds = $user->subscriptionNewspapers->pluck('id');
        $newspapers = Newspaper::whereIn('id', $newspaperIds)->latest()->paginate(5);

        return NewspaperResource::collection($newspapers);
    }
}
