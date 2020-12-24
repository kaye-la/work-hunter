
<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();
        $this->call('UserTableSeeder');

        DB::table('jobseekers')->delete();
        $this->call('JobseekerTableSeeder');

        DB::table('recruiters')->delete();
        $this->call('RecruiterTableSeeder');

        DB::table('locations')->delete();
        $this->call('LocationTableSeeder');

        DB::table('workexperiences')->delete();
        $this->call('WorkexperienceTableSeeder');

        DB::table('specializations')->delete();
        $this->call('SpecializaionTableSeeder');

        DB::table('vacancies')->delete();
        $this->call('VacancyTableSeeder');

        DB::table('applications')->delete();
        $this->call('ApplicationTableSeeder');

    
        DB::table('interviews')->delete();
        $this->call('InterviewTableSeeder');

        Model::reguard();
    }

}