<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Addjournalvideo extends Model
{
     use SoftDeletes;
    protected $table = 'addjournalvideos';
    protected $fillable=[ 'detail_id','auth_name','header','dob','photo','popular','subject','photo2'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }

     public function detail($value='')
    {
    	return $this->belongsTo('App\Journalvideo','detail_id');
    }
}
