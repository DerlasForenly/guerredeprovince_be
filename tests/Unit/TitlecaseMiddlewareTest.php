<?php

namespace Tests\Unit;

use App\Http\Middleware\TitlecaseMiddleware;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class TitlecaseMiddlewareTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_titlecase()
    {
        $request = new Request;

        $request->merge([
            'title' => 'Title is in mixed CASE'
        ]);

        $middleware = new TitlecaseMiddleware;

        $middleware->handle($request, function ($req) {
            $this->assertEquals('Title has been changed', $req->title);
        });
    }
}
