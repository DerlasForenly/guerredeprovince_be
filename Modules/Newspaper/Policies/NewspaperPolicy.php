<?php

namespace Modules\Newspaper\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Modules\Newspaper\Models\Newspaper;
use Modules\User\Models\User;

class NewspaperPolicy
{
    use HandlesAuthorization;

    public function subscribe(User $user, Newspaper $newspaper): Response
    {
        $subscription = $user->subscriptions->where('newspaper_id', $newspaper->id)->first();

        return match (true) {
            $subscription !== null => $this->deny('You already have this subscription'),
            default => $this->allow(),
        };
    }

    public function unsubscribe(User $user, Newspaper $newspaper): Response
    {
        $subscription = $user->subscriptions->where('newspaper_id', $newspaper->id)->first();

        return match (true) {
            $subscription === null => $this->deny('You do not have this subscription'),
            default => $this->allow(),
        };
    }
}
