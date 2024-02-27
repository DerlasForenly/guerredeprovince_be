<?php

use Illuminate\Support\Collection;
use Modules\Newspaper\Models\Article;
use Modules\Newspaper\Services\RecommendationsService;
use Modules\User\Models\User;
use Tests\TestCase;

class RecommendationsServiceTest extends TestCase
{
    public function testCreateRecommendationListWithLessThanFiveRatings()
    {
        $user    = $this->createMock(User::class);
        $article = $this->createMock(Article::class);

        $articles = $this->createMock(Collection::class);
        $articles->expects($this->once())
            ->method('random')
            ->willReturn($article);

        $articleModel = $this->createMock(Article::class);
        $articleModel->expects($this->once())
            ->method('where')
            ->with('user_id', '!=', $user->id)
            ->willReturnSelf();
        $articleModel->expects($this->once())
            ->method('get')
            ->willReturn($articles);

        $recommendationsService = new RecommendationsService();

        $user->expects($this->once())
            ->method('articleRatings')
            ->willReturnSelf();
        $user->articleRatings->expects($this->once())
            ->method('count')
            ->willReturn(3); // Less than 5

        $this->mock(Article::class, function ($mock) use ($article) {
            $mock->shouldReceive('find')
                ->andReturn($article);
        });

        $this->assertSame($article, $recommendationsService->createRecommendationList($user));
    }

    public function testCreateRecommendationListWithFiveOrMoreRatings()
    {
        $user     = $this->createMock(User::class);
        $user->id = 1;

        $article             = $this->createMock(Article::class);
        $article->article_id = 1;

        $articles = $this->createMock(Collection::class);
        $articles->expects($this->once())->method('random')->willReturn($article);

        $articleModel = $this->createMock(Article::class);
        $articleModel->expects($this->once())->method('where')->with('user_id', '!=', $user->id)
            ->willReturnSelf();
        $articleModel->expects($this->once())->method('get')->willReturn($articles);

        $recommendationsService = new RecommendationsService();

        $user->expects($this->once())->method('articleRatings')->willReturnSelf();
        $user->articleRatings->expects($this->once())->method('count')->willReturn(5);

        $recommendationsService->expects($this->once())->method('getAllRatings')
            ->willReturn($this->createMock(Collection::class));

        $recommendationsService->expects($this->exactly(2))->method('transformArrayToArticleIdKey')
            ->willReturn([]);

        $recommendationsService->expects($this->once())->method('getNeighboursRatings')->with($user)
            ->willReturn($this->createMock(Collection::class));

        $this->mock(Article::class, function ($mock) use ($article) {
            $mock->shouldReceive('find')->with($article->article_id)->andReturn($article);
        });

        $this->assertSame($article, $recommendationsService->createRecommendationList($user));
    }
}