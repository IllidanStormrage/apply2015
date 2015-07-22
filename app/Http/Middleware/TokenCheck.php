<?php

namespace App\Http\Middleware;

use Closure;

class TokenCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->input('token') && $request->input('uid')) {

        } else {
            return redirect('Api/test');// todo login route
        }
        return $next($request);
    }
}
