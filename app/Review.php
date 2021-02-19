<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
     use SoftDeletes;
    protected $table = 'reviews';
    protected $fillable=[ 'name','photo','class','subject'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
