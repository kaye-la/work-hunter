<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create(array(
			'name' 		=> 'admin',
			'email'		=> 'admin@example.com',
			'password'	=> Hash::make('123456'),
			'is_admin'	=> true,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		User::create(array(
			'name' 		=> 'user1',
			'email'		=> 'user1@example.com',
			'password'	=> Hash::make('123456'),
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}