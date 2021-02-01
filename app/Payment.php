<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;
    protected $fillable=[ 'student_id','timetable_id','amount','discount','status','paymenttype_id','staff_id','note' ];
}
