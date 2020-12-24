<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Specialization;
use Carbon\Carbon;



class SpecializaionTableSeeder extends Seeder {

	public function run()
	{
		Specialization::create(array(
			'sphere' 	=> 'finance',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Specialization::create(array(
			'sphere' 	=> 'medicine',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Specialization::create(array(
			'sphere' 	=> 'education',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Specialization::create(array(
			'sphere' 	=> 'engineering',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
		Specialization::create(array(
			'sphere' 	=> 'IT',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Specialization::create(array(
			'sphere' 	=> 'cooking',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Specialization::create(array(
			'sphere' 	=> 'killing ppl',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Specialization::create(array(
			'sphere' 	=> 'eating grass',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Specialization::create(array(
			'sphere' 	=> 'sleeping',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
		Specialization::create(array(
			'sphere' 	=> 'psychology',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
		Specialization::create(array(
			'sphere' 	=> 'photography',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
		Specialization::create(array(
			'sphere' 	=> 'nose picking',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}