<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
	 use SoftDeletes;
    protected $table = 'abouts';
    protected $fillable=[ 'name','subject','photo'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
