<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
     use SoftDeletes;
    protected $table = 'contacts';
    protected $fillable=[ 'email','phone','address', 'map'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
