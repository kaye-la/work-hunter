<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    //
    public function vacancies()
    {
    	return $this->hasMany('App\Vacancy');
    }

    public function interviews()
    {
    	return $this->hasMany('App\Interview');
    }
}
