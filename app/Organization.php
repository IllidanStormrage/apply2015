<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model {

    protected $table = 'organization';

    protected $fillable = ['organization', 'school_id', 'academy_id', 'time'];

    public $timestamps = false;

    public function departments() {
        return $this->hasMany('App\Model\Department', 'organization_id', 'id');
    }
    public function users() {
        return $this->hasOne('App\Model\User', 'id', 'user_id');
    }
}
