<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Application;
use Carbon\Carbon;



class ApplicationTableSeeder extends Seeder {

	public function run()
	{

		$jobseeker = DB::table('jobseekers')
				->select('id')->where('name','madina')->first()->id;
		$vacancy = DB::table('vacancies')
				->select('id')->where('name','Plumber')->first()->id;

		Application::create(array(
			'job_seeker_id' 		=> $jobseeker,
			'vacancy_id'		=> $vacancy,
			'motivation_letter'	=> 'hello please hire me',
			'email' => 'wassup@example.com',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Application::create(array(
			'job_seeker_id' 		=> $jobseeker,
			'vacancy_id'	=> $vacancy,
			'motivation_letter'	=> 'hello please hire me',
			'email'		=> 'faryk@example.com',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}