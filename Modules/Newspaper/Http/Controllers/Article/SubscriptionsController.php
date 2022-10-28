<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;

class SubscriptionsController extends Controller
{
    public function __invoke()
    {
        $user = auth()->userOrFail();

        return $user->subscriptionNewspapers->pluck('articles')->collapse();
    }
}
