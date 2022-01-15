<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TitlecaseMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->title) {
            $request->merge([
                'title' => 'Title has been changed'
            ]);
        }

        return $next($request);
    }
}
