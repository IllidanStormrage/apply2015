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
            if(!$this->checkRoute($user, $name)){
                return ['status' => 403, 'info' => '没有权限!', 'data'=>[$name]];
            }
        } else {
            return ['status' => 400, 'info' => '数据错误!'];
        }
        return $next($request);
    }

    private function checkRoute($user, $name = ''){
        foreach($user as $role_id){
            $routes = \Cache::get('role_'.$role_id['role_id']);
            foreach($routes as $route) {
               if($route['path'] == $name) {
                   return true;
               }
            }
        }
        return false;
    }
}
