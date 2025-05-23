<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BlockMobile
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the request is coming from a mobile device
        if ($request->header('User-Agent') && preg_match('/Mobile|Android|iP(hone|ad)/i', $request->header('User-Agent'))) {
            // Return a custom response or redirect
            return response('Mobile access is restricted. Yeah yeah, it will be available soon. Dont judge, work is so busy!', 403);
        }

        return $next($request);
    }
}
