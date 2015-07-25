<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'role';

    public function routes() {
        return $this->belongsToMany('App\Routes', 'role_route', 'role_id', 'route_id');
    }

}
