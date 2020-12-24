<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Location;
use Carbon\Carbon;


class LocationTableSeeder extends Seeder {

	public function run()
	{
		Location::create(array(
			'address'   => 'Tajikistan',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Location::create(array(
			'address' 		=> 'Hong Kong',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Location::create(array(
			'address' 		=> 'Russia',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Location::create(array(
			'address' 		=> 'USA',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Location::create(array(
			'address' 		=> 'South Korea',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Location::create(array(
			'address' 		=> 'HKU',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Location::create(array(
			'address' 		=> 'My Home',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));


	}

}