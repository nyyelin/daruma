<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Slider extends Model
{
    use SoftDeletes;
    protected $table = 'sliders';
    protected $fillable=[ 'name','subject','photo'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
