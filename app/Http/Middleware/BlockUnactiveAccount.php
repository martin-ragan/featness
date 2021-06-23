<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BlockUnactiveAccount
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
        if (auth()->check()) {
            if (date('Y-m-d H:i:s') > auth()->user()->active_until) {
                auth()->logout();
                return redirect()->route('login');
            }
        }
        return $next($request);
    }
}
