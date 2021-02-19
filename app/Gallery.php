<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;
    protected $table = 'galleries';
    protected $fillable=[ 'name','photo', 'class', 'categories'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
