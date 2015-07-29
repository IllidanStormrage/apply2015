<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    //
    protected $table = 'process';

    protected $fillable = ['department_id', 'processname', 'remark', 'organization_level'];

    public $timestamps = false;

}
