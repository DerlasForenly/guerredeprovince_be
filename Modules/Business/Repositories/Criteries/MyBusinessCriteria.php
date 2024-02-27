<?php

namespace Modules\Business\Repositories\Criteries;

use App\Repositories\Criteria;
use Modules\User\Models\User;

class MyBusinessCriteria extends Criteria
{
    public function apply($query)
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        return $query->where('user_id', $user->id);
    }
}