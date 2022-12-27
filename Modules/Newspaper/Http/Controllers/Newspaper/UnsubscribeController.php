<?php

namespace Modules\Newspaper\Http\Controllers\Newspaper;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Models\Newspaper;
use Modules\Newspaper\Models\Subscription;
use Modules\User\Models\User;

/**
 * Class UnsubscribeController
 */
class UnsubscribeController extends Controller
{
    public function __invoke(Newspaper $newspaper): JsonResponse
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        /**
         * @var Subscription $subscription
         */
        $subscription = $user->subscriptions->where('newspaper_id', $newspaper->id)->first();

        $subscription->delete();

        return response()->json([
            'message'      => 'OK',
            'subscribed'   => false,
            'newspaper_id' => $newspaper->id,
        ], 200);
    }
}
