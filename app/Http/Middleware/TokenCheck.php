<?php

namespace App\Http\Middleware;

use App\Model\User;
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
            $user = User::find($request->input('uid'));
            if($user['remember_token'] !== $request->input('token')) {
                return ['status' => 401, 'error' => '请先登录!'];
            }
        } else {
            return ['status' => 401, 'error' => '请先登录!'];
        }
        return $next($request);
    }
}
