<?php

namespace App\Model;
use App\Model\Department;
use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
    //
    protected $table = 'user_role';

    public function department() {
        return $this->hasOne('App\Model\Department', 'id', 'department_id');
    }

}
