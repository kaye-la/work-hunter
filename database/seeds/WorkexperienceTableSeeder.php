<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Workexperience;
use Carbon\Carbon;


class WorkexperienceTableSeeder extends Seeder {

	public function run()
	{
		Workexperience::create(array(
			'experience' => '5 years',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Workexperience::create(array(
			'experience' => '1 year', 
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Workexperience::create(array(
			'experience' => '3 years', 
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Workexperience::create(array(
			'experience' => 'Fresh graduate', 
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Workexperience::create(array(
			'experience' => 'University student', 
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Workexperience::create(array(
			'experience' => 'A LOT', 
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Workexperience::create(array(
			'experience' => 'none :(', 
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}