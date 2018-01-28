<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentTable extends Model
{
    protected $table = 'parent';

    protected $hidden  = ['driver_id','password','parent_id'];
}
