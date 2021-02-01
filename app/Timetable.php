<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timetable extends Model
{
    use SoftDeletes;
    protected $fillable=[ 'name','time','level_id','start_date','duration','fees','description', 'status'];
}
