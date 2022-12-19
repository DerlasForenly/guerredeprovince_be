<?php

namespace Modules\Newspaper\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Modules\Newspaper\Models\Article;
use Modules\User\Models\User;

class ArticlePolicy
{
    use HandlesAuthorization;

    /**
     * @param \Modules\User\Models\User $user
     * @param \Modules\Newspaper\Models\Article $article
     * @return \Illuminate\Auth\Access\Response
     */
    public function vote(User $user, Article $article): Response
    {
        $rating = $article
            ->ratings
            ->where('user_id', $user->id)
            ->first();

        $voteValue = app('request')->get('value');

        return match (true) {
            $rating && $rating->value === $voteValue => $this->deny('You have already voted like this.'),
            default => $this->allow(),
        };
    }
}
