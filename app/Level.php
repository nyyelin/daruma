<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
	use SoftDeletes;
    protected $fillable=[ 'name' ];

    public function timetables($value='')
    {
    	return $this->hasMany('App\Timetable');
    }
    
}
