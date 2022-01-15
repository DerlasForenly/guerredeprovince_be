<?php

namespace Tests\Unit;

use App\Http\Middleware\JwtMiddleware;
use App\Http\Middleware\TitlecaseMiddleware;
use Exception;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

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
