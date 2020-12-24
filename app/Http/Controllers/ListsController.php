<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vacancy;
use App\Workexperience;
use App\Location;
use App\Specialization;
use App\Recruiter;
use Auth;
use DB;

class ListsController extends Controller
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
    public function index(Request $request)
    {
        //Obtain all "Todolist" records
        //$lists = Vacancy::all();
        //return the 'lists.index'niew with $lists variable
        //return view('lists.index')->with(array('lists'=>$lists, 'specialization'=>$specialization));
        /*
        $lists = Vacancy::lists('location_id', 'work_experience_id', 'specialization_id', 'recruiter_id', 'name', 'salary', 'description', 'notes', 'id');

        if ($request->has('name')){
            $lists->where('name', 'like', "%$request->name%");
        }

        $lists = $lists->get();
        return view("lists.index")->with('lists', $lists);*/

        //dd($request->all());
        $listsQuery = Vacancy::query();
        $specialization = Specialization::lists('sphere', 'id');
        
        if ($request->has('name')){
            $listsQuery->where('name', 'like', "%$request->name%");
        }

        if ($request->has('specialization_filter')){
            if ($request->specialization_filter != 0){
                $listsQuery->where('specialization_id', $request->specialization_filter);
            }
        }
        $lists = $listsQuery->paginate(100);
        return view('lists.index')->with(array('lists'=>$lists, 'specialization'=>$specialization));
    }
    
    public function myvacancies()
    {
        //Obtain all "Todolist" records
        $lists = Vacancy::all();
        $user = Auth::user();

        //return the 'lists.index'niew with $lists variable
        return view('lists.myvacancies')->with(array('lists'=>$lists,'xid'=>$user->id));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // retrieve all 'Category' records with 'name' and 'id'
 // and store the records in the $categories variable
    $user = Auth::user();
    $vacancies = Vacancy::lists('location_id', 'work_experience_id', 'specialization_id', 'recruiter_id', 'name', 'salary', 'description', 'notes', 'id');
    $work_experience = Workexperience::lists('experience', 'id'); 
    $location = Location::lists('address', 'id');
    $specialization = Specialization::lists('sphere', 'id');
   // $recruiter = Recruiter::lists('name', 'id');
     // return the 'lists.create' view with $categories variables
   // >with('work_experience', $work_experience)->
        return view('lists.create')->with(array('vacancies'=>$vacancies, 'location'=>$location, 'specialization'=>$specialization, 'work_experience'=>$work_experience, 'user'=>$user)); //'recruiter'=>$recruiter,
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        // Retrieve user and category record
        //$recruiter = DB::table('recruiters')
        //        ->select('id')->where('name','madina')->first()->id;
        $user = Auth::user();
        $work_experience = Workexperience::find($request->get('work_experience_id'));
        $location = Location::find($request->get('location_id'));
        $specialization = Specialization::find($request->get('specialization_id'));
        

        // Create new Todolist record
        $list = new Vacancy;

        // Assign name and description from input
        $list->name = $request->get('name');
        $list->description = $request->get('description');
        $list->salary = $request->get('salary');

        // Assign category_id and user_id from their records
        $list->work_experience()->associate($work_experience);
        $list->location()->associate($location);
        $list->specialization()->associate($specialization);
        //$list->recruiter()->associate($recruiter);
        $list->user()->associate($user);

        // Save Todolist record in database
        $list->save();

        // Redirect to lists.show function
        return \Redirect::route('lists.show', array($list->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // Retrieve the Todolist record
        $list = Vacancy::find($id);
        //return the 'lists.show' view with $list record
        return view('lists.show')->with('list',$list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // Retrieve $list record using $id
        $list = Vacancy::find($id);

        // Retrieve all "Category" records with 'name' and 'id'
        $work_experience = Workexperience::lists('experience', 'id'); 
        $location = Location::lists('address', 'id');
        $specialization = Specialization::lists('sphere', 'id');
        $recruiter = Recruiter::lists('name', 'id');
        // Return the 'lists.edit' view with $list and $categories record
        return view('lists.edit')->with(array('list'=>$list, 'location'=>$location, 'specialization'=>$specialization, 'recruiter'=>$recruiter, 'work_experience'=>$work_experience)); 
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
        $list = Vacancy::find($id);
        //Update $list record with user input
        $list->update($request->all());
        //return the 'lists.show' view with updated $list record
        return \Redirect::route('lists.show', array($list->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //Retrieve $list record using $id
        $list = Vacancy::find($id);
        //Delete $list record from database
        $list->delete();
        //return to 'lists.index' view
        return \Redirect::route('lists.index');
    }
}
