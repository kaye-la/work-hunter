<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = ['location_id', 'work_experience_id', 'specialization_id', 'name', 'salary', 'description', 'notes'];
    //
    public function applications()
    {
    	return $this->hasMany('App\Application');
    }
     public function recruiter()
    {
    	return $this->belongsTo('App\Recruiter');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
     public function location()
    {
    	return $this->belongsTo('App\Location');
    }
     public function work_experience()
    {
    	return $this->belongsTo('App\Workexperience');
    }
     public function specialization()
    {
    	return $this->belongsTo('App\Specialization');
    }
}
