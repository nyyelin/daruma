<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable=[ 'codeno','user_id','photo','address','dob','profile_link' ];

    public function timetables($value='')
    {
    	return $this->belongsToMany('App\Timetable')->withPivot('status')->withTimestamps();
    }

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
