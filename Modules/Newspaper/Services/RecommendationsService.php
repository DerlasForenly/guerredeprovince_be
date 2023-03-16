<?php

namespace Modules\Newspaper\Services;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Modules\Newspaper\Models\Article;
use Modules\User\Models\User;

class RecommendationsService
{
    const NUMBER_OF_ITEMS = 10;

    const NUMBER_OF_NEIGHBOURS = 5;

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
     * Similarity between users in form like array[user1][user2] = value
     *
     * @var array
     */
    private array $similarity;

    /**
     * Array structure is array[user_id][category_id] = value
     *
     * @var array
     */
    private array $userItemAvg;

    /**
     * Array structure is array[user_id][category_id] = value
     *
     * @var array
     */
    private array $userItemAvgCentered;

    /**
     * @param \Modules\User\Models\User $user
     * @return \Modules\Newspaper\Models\Article
     */
    public function createRecommendationList(User $user): Article
    {
        $general = $this->getAllRatings();

        foreach ($general as $item) {
            $this->userGeneralAvg[$item->user_id] = $item->average_value;
        }

        $forEachItem = $this->getCategoryRatings();

        foreach ($forEachItem as $item) {
            $userKey     = $item->user_id;
            $categoryKey = $item->category_id;

            $this->userItemAvg[$userKey][$categoryKey] = $item->average_value;
        }

        foreach ($this->userItemAvg as $user_id => $categoryValue) {
            foreach ($categoryValue as $category_id => $value) {
                $this->userItemAvgCentered[$user_id][$category_id] = $value - $this->userGeneralAvg[$user_id];
            }
        }

        $this->pirson($user);
        sort($this->similarity);
        $this->similarity = array_reverse($this->similarity, true);
        $this->neighbours = array_slice($this->similarity, 0, self::NUMBER_OF_NEIGHBOURS, true);
        $notRatedByUser = $this->getNeighboursRatings($user);

        return Article::find($notRatedByUser->article_id);
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
     * @param \Modules\User\Models\User $user
     * @return void
     */
    private function pirson(User $user): void
    {
        foreach ($this->userItemAvgCentered as $user_id => $categoryValue) {
            if ($user_id === $user->id) {
                continue;
            }

            $up = 0;
            foreach ($categoryValue as $category => $value) {
                $up += $this->userItemAvgCentered[$user_id][$category] * $this->userItemAvgCentered[$user->id][$category];
            }

            $downLeft = 0;
            foreach ($categoryValue as $category => $value) {
                $downLeft += $this->userItemAvgCentered[$user_id][$category] * $this->userItemAvgCentered[$user_id][$category];
            }

            $downRight = 0;
            foreach ($categoryValue as $category => $value) {
                $downRight += $this->userItemAvgCentered[$user->id][$category] * $this->userItemAvgCentered[$user->id][$category];
            }

            $down = sqrt($downRight * $downLeft);

            $this->similarity[$user_id] = $up / $down;
        }
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
     * @return \Illuminate\Support\Collection
     */
    private function getCategoryRatings(): Collection
    {
        return $this->prepareDatabaseRequest()
            ->join('articles', 'ratings.article_id', '=', 'articles.id')
            ->leftJoin('categories', 'articles.category_id', '=', 'categories.id')
            ->select(
                'users.id as user_id',
                DB::raw('AVG(ratings.value) as average_value'),
                'categories.id as category_id',
            )
            ->groupBy('user_id', 'category_id')
            ->get();
    }

    /**
     * @param \Modules\User\Models\User $user
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Query\Builder|object|null
     */
    private function getNeighboursRatings(User $user)
    {
        return DB::table('ratings')
            ->select('*')
            ->where('article_id', '<>', '')
            ->where('user_id', '!=', $user->id)
            ->whereIn('user_id', array_keys($this->neighbours))
            ->limit(self::NUMBER_OF_ITEMS)
            ->inRandomOrder()
            ->first();
    }

}