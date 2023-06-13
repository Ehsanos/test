<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class TestMiddelwear
{

    public function handle(Request $request, Closure $next)
    {
        if (auth())
            return $next($request);




    }
}
