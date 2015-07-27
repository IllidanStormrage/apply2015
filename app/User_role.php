<?php

namespace App\Model;
use App\Model\Department;
use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['user_id','role_id', 'department_id'];
    protected $table = 'user_role';

    public function department() {
        return $this->hasOne('App\Model\Department', 'id', 'department_id');
    }

}
