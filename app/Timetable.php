<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timetable extends Model
{
    use SoftDeletes;
    protected $fillable=[ 'name','start_time','end_time','level_id','start_date','duration','fees','description', 'status'];


    public function days($value='')
    {
     	return $this->belongsToMany('App\Day')->withTimestamps();
    }

    public function level($value='')
    {
    	return $this->belongsTo('App\Level');
    }

    public function students($value='')
    {
        return $this->belongsToMany('App\Student')->withPivot('status')->withTimestamps();
    }


}
