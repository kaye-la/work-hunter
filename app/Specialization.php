<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    //
    public function vacancies()
    {
    	return $this->hasMany('App\Vacancy');
    }
}
