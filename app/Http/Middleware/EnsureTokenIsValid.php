<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->has('bot_token') && empty($request->input('bot_token')))
            return response()
                ->json(['error' => 'Invalid Bot Token Provided!'],200,['Content-Type' => 'application/text']);
        else
            return $next($request);
    }
}
