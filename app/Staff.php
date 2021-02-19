<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use SoftDeletes;
    protected $table = 'staffs';
    protected $fillable=[ 'user_id','address','photo','dob','designation'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}