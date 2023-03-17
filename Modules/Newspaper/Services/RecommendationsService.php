<?php

namespace Modules\Newspaper\Services;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Modules\Newspaper\Models\Article;
use Modules\User\Models\User;

class RecommendationsService
{
    /**
     *
     */
    const NUMBER_OF_NEIGHBOURS = 3;

    /**
     * @var array
     */
    protected array $neighbours;

    /**
     * Array structure is array[user_id] = value
     *
     * @var array
     */
    private array $userGeneralAvg;

    /**
     * @param \Modules\User\Models\User $user
     * @return ?\Modules\Newspaper\Models\Article
     */
    public function createRecommendationList(User $user): ?Article
    {
        if ($user->articleRatings()->count() < 5) {
            $articles = Article::where('user_id', '!=', $user->id)->get();

            return $articles->random();
        }


        /**
         * Average for every user
         */
        $general = $this->getAllRatings();
        foreach ($general as $item) {
            $this->userGeneralAvg[$item->user_id] = $item->average_value;
        }

        /**
         * All ratings
         */
        $items = DB::table('ratings')
            ->join('articles', 'articles.id', '=', 'ratings.article_id')
            ->whereIn('ratings.user_id', array_keys($this->userGeneralAvg))
            ->where('ratings.article_id', '<>', '')
            ->select(
                'ratings.user_id as user_id',
                'ratings.id as rating_id',
                'articles.id as article_id',
                'ratings.value as value',
                'articles.user_id as author_id',
            )
            ->get();

        $usersRatings = [];
        $articles     = [];
        $users        = [];
        foreach ($items as $key => $item) {
            $item->centered = $item->value - $this->userGeneralAvg[$item->user_id];

            if ($item->user_id === $user->id) {
                $usersRatings[] = $item;
            }

            $articles[] = $item->article_id;
            $users[]    = $item->user_id;
        }
        $articles = array_unique($articles);
        $users    = array_unique($users);

        $items        = $this->transformArrayToArticleIdKey($items);
        $usersRatings = $this->transformArrayToArticleIdKey($usersRatings);

        $similarity = [];
        foreach ($users as $user_id) {
            if ($user->id === $user_id) {
                continue;
            }

            $up        = 0;
            $downLeft  = 0;
            $downRight = 0;
            foreach ($articles as $article) {
                if (array_key_exists($article, $usersRatings) && array_key_exists($article, $items)) {
                    if (array_key_exists($user_id, $items[$article])) {
                        $l = $usersRatings[$article][$user->id]->centered;
                        $r = $items[$article][$user_id]->centered;

                        $up += $l * $r;

                        $downLeft  += $usersRatings[$article][$user->id]->centered * $usersRatings[$article][$user->id]->centered;
                        $downRight += $items[$article][$user_id]->centered * $items[$article][$user_id]->centered;
                    }
                }
            }

            if (!$downLeft || !$downRight) {
                $similarity[] = 0;
                continue;
            }

            $similarity[] = $up / sqrt($downLeft * $downRight);
        }

        sort($similarity);
        $similarity       = array_reverse($similarity, true);
        $this->neighbours = array_slice($similarity, 0, self::NUMBER_OF_NEIGHBOURS, true);
        $notRatedByUser   = $this->getNeighboursRatings($user);

        if (!$notRatedByUser->count()) {
            return null;
        }

        $article = $notRatedByUser->random();

        return Article::find($article->article_id);
    }

    /**
     * @return \Illuminate\Database\Query\Builder
     */
    private function prepareDatabaseRequest(): Builder
    {
        return DB::table('users')
            ->select('id', 'nickname')
            ->where('banned', false)
            ->where('inactive', false)
            ->join('ratings', 'users.id', '=', 'ratings.user_id');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    private function getAllRatings(): Collection
    {
        return $this->prepareDatabaseRequest()
            ->select(
                'users.id as user_id',
                DB::raw('AVG(ratings.value) as average_value'),
            )
            ->groupBy('user_id')
            ->where('ratings.article_id', '<>', '')
            ->get();
    }

    /**
     * @param \Modules\User\Models\User $user
     * @return \Illuminate\Support\Collection
     */
    private function getNeighboursRatings(User $user): Collection
    {
        $articles = DB::table('articles')
            ->where('articles.user_id', '!=', $user->id)
            ->join('ratings', 'ratings.article_id', '=', 'articles.id')
            ->where('ratings.user_id', '=', $user->id)
            ->select(
                'articles.id as id',
            )
            ->get();

        $array = [];
        foreach ($articles as $article) {
            $array[] = $article->id;
        }
        $articles = $array;

        $articles = DB::table('ratings')
            ->join('articles', 'articles.id', '=', 'ratings.article_id')
            ->where('articles.user_id', '!=', $user->id)
            ->where('ratings.article_id', '<>', '')
            ->whereNot(function (Builder $query) use ($articles) {
                $query->whereIn('articles.id', $articles);
            })
            ->whereIn('ratings.user_id', array_keys($this->neighbours))
            ->select(
                'ratings.id as rating_id',
                'articles.id as article_id',
                'ratings.user_id as rating_user_id',
                'articles.user_id as article_user_id',
            )
            ->get();

        if (!$articles->count()) {
            $articles = DB::table('ratings')
                ->join('articles', 'articles.id', '=', 'ratings.article_id')
                ->where('articles.user_id', '!=', $user->id)
                ->where('ratings.article_id', '<>', '')
                ->whereIn('ratings.user_id', array_keys($this->neighbours))
                ->select(
                    'ratings.id as rating_id',
                    'articles.id as article_id',
                    'ratings.user_id as rating_user_id',
                    'articles.user_id as article_user_id',
                )
                ->get();
        }

        return $articles;
    }

    /**
     * @param $items
     * @return array
     */
    private function transformArrayToArticleIdKey($items): array
    {
        $new = [];

        foreach ($items as $item) {
            $new[$item->article_id][$item->user_id] = $item;
        }

        return $new;
    }
}