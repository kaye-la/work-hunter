<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vacancy;
use App\Workexperience;
use App\Location;
use App\Specialization;
use App\Recruiter;
use App\Application;
use App\Jobseeker;
use Auth;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public $vacancy;

    public function index()
    {
        
        $myapps = Application::all();
        $user = Auth::user();
        $vacancy = Vacancy::all();

        return view('applications.index')->with(array('myapps'=>$myapps, 'xid'=>$user->id, 'vacancy'=>$vacancy));   
    }

    public function applications_for_recruiter()
    {
        
        $myapps = Application::all();
        $user = Auth::user();

        return view('applications.applications_for_recruiter')->with(array('myapps'=>$myapps, 'xid'=>$user->id));   
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {
        $this->vacancy = Vacancy::find($id);
        
        $user = Auth::user();
        return view('applications.create')->with(array('vacancy'=>$this->vacancy, 'user'=>$user));
    }
/*
    public function createStatus($id)
    {
        $application = Application::find($id);
        //$user
        return view('applications.changeStatus')->with('application', $application);
    }
*/
    public function updateStatus(Request $request, $id)
    {
        //Retrieve $list record using $id
        $application = Application::find($id);
        //Update $list record with user input
        $application->update($request->all());
        //return the 'lists.show' view with updated $list record
        return \Redirect::route('showApplication', $application->id);
    }

    public function storeStatus($id)
    {
        // Create new Todolist record
        $application = Application::find($id);

        // Assign name and description from input
        $application->status = \Input::get('status');
        
        // Save Todolist record in database
        $application->save();

        // Redirect to lists.show function
        return \Redirect::route('showApplication', $application->id);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store($Vacancyid)
    {
        //$jobseeker = DB::table('jobseekers')
        //        ->select('id')->where('name','madina')->first()->id;
        $user = Auth::user();
        $vacancy = Vacancy::find($Vacancyid);
        // Create new Todolist record
        $application = new Application;

        // Assign name and description from input
        $application->email = \Input::get('email');
        $application->motivation_letter = \Input::get('motivation_letter');
        
        // Assign category_id and user_id from their records
        $application->vacancy()->associate($vacancy);
        $application->user()->associate($user);
        //$application->job_seeker()->associate($jobseeker);
        
        // Save Todolist record in database
        $application->save();

        // Redirect to lists.show function
        return \Redirect::route('showApplication', $application->id);
    }
    
    public function createApp($id)
    {
        $vacancies = Vacancy::find($id);
        
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest(route('getLogin'));
            }
        }
        
        $user = Auth::user();
        return view('createApplication')->with(array('vacancies'=>$vacancies, 'user'=>$user));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $application = Application::find($id);
        //return the 'lists.show' view with $list record
        return view('applications.show')->with('application',$application);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $application = Application::find($id);
        //$user
        return view('applications.changeStatus')->with('application', $application);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //Retrieve $list record using $id
        $application = Application::find($id);
        //Update $list record with user input
        $application->update($request->all());
        //return the 'lists.show' view with updated $list record
        return \Redirect::route('showApplication', $application->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $application = Application::find($id);

        // Assign name and description from input
        $application->status = \Input::get('status');
        
        // Save Todolist record in database
        $application->save();

        // Redirect to lists.show function
        return \Redirect::route('showApplication', $application->id);
    }
}
