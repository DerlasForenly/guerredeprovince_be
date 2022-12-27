<?php

namespace Modules\Newspaper\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Modules\Newspaper\Models\Comment;
use Modules\User\Models\User;

/**
 * Class CommentPolicy
 */
class CommentPolicy
{
    use HandlesAuthorization;

    /**
     * @param \Modules\User\Models\User $user
     * @param \Modules\Newspaper\Models\Comment $comment
     * @return \Illuminate\Auth\Access\Response
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function vote(User $user, Comment $comment): Response
    {
        $rating = $comment
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
