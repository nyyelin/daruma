<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Journalvideo extends Model
{
     use SoftDeletes;
    protected $table = 'journalvideos';
    protected $fillable=[ 'name','photo', 'categories'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
