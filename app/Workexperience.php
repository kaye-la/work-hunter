<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workexperience extends Model
{
    //
    public function vacancies()
    {
    	return $this->hasMany('App\Vacancy');
    }
}
