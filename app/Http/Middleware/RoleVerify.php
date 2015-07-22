<?php

namespace App\Http\Middleware;

use App\Model\User;
use Closure;

class RoleVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if($request->input('uid')) {
            $user = User::find($request->input('uid'))->roles;
            $name = \Route::currentRouteName();
            foreach($user as $role_id){
               //todo table Role_route
            }
            return
        } else {
            return ;
        }
        return $next($request);
    }
}
