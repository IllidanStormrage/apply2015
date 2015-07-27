<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'role';

    public function routes() {
        return $this->belongsToMany('App\Model\Routes', 'role_route', 'role_id', 'route_id');
    }

}
