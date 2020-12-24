<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Jobseeker;
use Carbon\Carbon;


class JobseekerTableSeeder extends Seeder {

	public function run()
	{
		Jobseeker::create(array(
			'name' 		=> 'madina',
			'email'		=> 'mady@example.com',
			'password'	=> Hash::make('123456'),
			'mobile_no' => '935810214',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Jobseeker::create(array(
			'name' 		=> 'farik',
			'email'		=> 'fary@example.com',
			'password'	=> Hash::make('1234567'),
			'mobile_no' => '988887760',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Jobseeker::create(array(
			'name' 		=> 'coronavirus',
			'email'		=> 'corona@example.com',
			'password'	=> Hash::make('1234567'),
			'mobile_no' => '988887760',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

			Jobseeker::create(array(
			'name' 		=> 'marijuana',
			'email'		=> 'marijuana@example.com',
			'password'	=> Hash::make('1234567'),
			'mobile_no' => '988887760',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

			Jobseeker::create(array(
			'name' 		=> 'imse2113',
			'email'		=> 'imse@example.com',
			'password'	=> Hash::make('1234567'),
			'mobile_no' => '988887760',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

			Jobseeker::create(array(
			'name' 		=> 'hku',
			'email'		=> 'hku@example.com',
			'password'	=> Hash::make('1234567'),
			'mobile_no' => '988887760',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}