<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {
    //
    protected $table = 'department';

    protected $fillable = ['department', 'organization_id', 'organization_level', 'show', 'introduce'];

    public $timestamps = false;

    public function users() {
        return $this->hasOne('App\Model\User', 'id', 'user_id');
    }

    public function processes() {
        return $this->hasMany('App\Model\Process', 'department_id', 'id');
    }
}
