<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
     use SoftDeletes;
    protected $table = 'books';
    protected $fillable=[ 'name','fee','photo', 'photo2', 'header', 'auth_name', 'dob', 'subject'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
