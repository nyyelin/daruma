<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
     use SoftDeletes;
    protected $table = 'subjects';
    protected $fillable=[ 'name','subject'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
