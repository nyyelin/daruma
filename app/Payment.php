<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;
    protected $fillable=[ 'student_id','timetable_id','amount','discount','status','paymenttype_id','user_id','note' ];

    public function timetable($value='')
    {
    	return $this->belongsTo('App\Timetable');
    }
}
