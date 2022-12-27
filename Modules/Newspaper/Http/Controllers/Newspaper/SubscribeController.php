<?php

namespace Modules\Newspaper\Http\Controllers\Newspaper;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Models\Newspaper;
use Modules\Newspaper\Models\Subscription;
use Modules\User\Models\User;

/**
 * Class SubscribeController
 */
class SubscribeController extends Controller
{
    /**
     * @param \Modules\Newspaper\Models\Newspaper $newspaper
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Newspaper $newspaper): JsonResponse
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        /**
         * @var Subscription $subscription
         */
        $subscription = Subscription::create([
            'user_id'      => $user->id,
            'newspaper_id' => $newspaper->id,
        ]);

        return response()->json([
            'message'         => 'OK',
            'subscription_id' => $subscription->id,
            'subscribed'      => true,
            'newspaper_id'    => $newspaper->id,
        ], 201);
    }
}
