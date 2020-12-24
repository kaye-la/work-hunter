<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    //
     /* FARIK
     public function recruiter()
    {
    	return $this->belongsTo('App\Recruiter');
    }*/
     public function application()
    {
    	return $this->belongsTo('App\Application');
    }
}
