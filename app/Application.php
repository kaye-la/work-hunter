<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['vacancy_id', 'user_id', 'motivation_letter', 'status', 'email'];
    //
    public function interviews()
    {
    	return $this->hasMany('App\Interview');
    }
    public function job_seeker()
    {
    	return $this->belongsTo('App\Jobseeker');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
     public function vacancy()
    {
    	return $this->belongsTo('App\Vacancy');
    }
}
