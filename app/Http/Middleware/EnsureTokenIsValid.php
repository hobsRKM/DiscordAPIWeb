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
        if(false)
            return $next($request);
        else
            return response()
                ->json(['error' => 'Missing Bot Token'],200,['Content-Type' => 'application/text']);
    }
}
