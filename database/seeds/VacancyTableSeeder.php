<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Vacancy;
use Carbon\Carbon;


class VacancyTableSeeder extends Seeder {

	public function run()
	{

		$recruiter = DB::table('recruiters')
				->select('id')->where('name','Professor')->first()->id;
		$location = DB::table('locations')
				->select('id')->where('address','Tajikistan')->first()->id;
		$workexperience = DB::table('workexperiences')
				->select('id')->where('experience','5 years')->first()->id;

		$specialization = DB::table('specializations')
				->select('id')->where('sphere','finance')->first()->id;

		$admin = DB::table('users')
				->select('id')->where('name','admin')->first()->id;
		$user = DB::table('users')
				->select('id')->where('name','user1')->first()->id;


		Vacancy::create(array(
			'name' 		=> 'Plumber',
			'salary'		=> '1000 HKD',
			'description'	=> 'Plumber needed urgently',
			'notes' => 'work includes overnight shifts',
			'recruiter_id' => $recruiter,
			'location_id' => $location,
			'work_experience_id' => $workexperience,
			'specialization_id' => $specialization,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Vacancy::create(array(
			'name' 		=> 'Financial analyst',
			'salary'		=> '160 000 HKD',
			'description'	=> 'Financial analyst needed urgently',
			'notes' => 'work includes financial analysis of logistics company in Russia',
			'recruiter_id' => $recruiter,
			'location_id' => $location,
			'work_experience_id' => $workexperience,
			'specialization_id' => $specialization,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}