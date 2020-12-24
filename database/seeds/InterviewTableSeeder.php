<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Interview;
use Carbon\Carbon;
/*
$table->increments('id');
            $table->integer('application_id')->unsigned();
            $table->foreign('application_id')->references('id')->on('applications')->onDelete('cascade');
 //           $table->integer('recruiter_id')->unsigned();
  //          $table->foreign('recruiter_id')->references('id')->on('recruiters')->onDelete('cascade');
            $table->string('platform');
            $table->timestamps();
*/
class InterviewTableSeeder extends Seeder {

	public function run()
	{
//		$jobseeker = 'f'
		$jobseeker = DB::table('jobseekers')
				->select('id')->where('name','madina')->first()->id;
		$application = DB::table('Applications')
				->select('id')->where('job_seeker_id', $jobseeker)->first()->id;
//		$recruiter = DB::table('recruiters')
//				->select('id')->where('name','mady')->first()->id;

		Interview::create(array(
			'application_id' => $application,
//			'recruiter_id'		=> $recruiter,
			'platform' => 'Skype',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Interview::create(array(
			'application_id' => $application,
//			'recruiter_id'		=> $recruiter,
			'platform' => 'Zoom',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}