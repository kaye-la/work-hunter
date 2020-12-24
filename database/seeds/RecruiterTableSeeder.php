<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Recruiter;
use Carbon\Carbon;



class RecruiterTableSeeder extends Seeder {

	public function run()
	{
		Recruiter::create(array(
			'name' 		=> 'Professor',
			'email'		=> 'prof@example.com',
			'password'	=> Hash::make('12345644'),
			'mobile_no' => '9358102143',
			'organization_name' => 'HKU',
			'organization_type' => 'various',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Recruiter::create(array(
			'name' 		=> 'madina',
			'email'		=> 'farykkkk@example.com',
			'password'	=> Hash::make('123456711'),
			'mobile_no' => '9888877601',
			'organization_name' => 'whatsup',
			'organization_type' => 'finance', 
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Recruiter::create(array(
			'name' 		=> 'HKU',
			'email'		=> 'uni@example.com',
			'password'	=> Hash::make('123456711'),
			'mobile_no' => '9888877601',
			'organization_name' => 'universityyyyy',
			'organization_type' => 'education', 
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Recruiter::create(array(
			'name' 		=> 'headhunter',
			'email'		=> 'hh@example.com',
			'password'	=> Hash::make('123456711'),
			'mobile_no' => '9888877601',
			'organization_name' => 'hh.hk',
			'organization_type' => 'other', 
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Recruiter::create(array(
			'name' 		=> 'Dim Sum',
			'email'		=> 'dimsum@example.com',
			'password'	=> Hash::make('123456711'),
			'mobile_no' => '9888877601',
			'organization_name' => '3am dimsum',
			'organization_type' => 'culinary', 
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}