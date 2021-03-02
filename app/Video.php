<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
     use SoftDeletes;
    protected $table = 'videos';
    protected $fillable=[ 'name','auth_name','dob','subject','videourl'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
