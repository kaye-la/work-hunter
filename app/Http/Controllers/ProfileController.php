<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
    

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user = Auth::user();
        $recruiter = Recruiter::lists('id', 'name', 'email', 'mobile_no', 'user_image', 'user_id', 'organization_type', 'organization_name');
        $jobseeker = Jobseeker::lists('id', 'name', 'email', 'mobile_no', 'user_image', 'user_id');
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
        $user = User::find($id);
        //return the 'lists.show' view with $list record
        return view('auth.profile')->with('user',$user);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         $user = Auth::user();

        // Return the 'lists.edit' view with $list and $categories record
        return view('auth.editProfile')->with('user',$user); 
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
        $user = Auth::user();
        //Update $list record with user input
        $user->update($request->all());
        //return the 'lists.show' view with updated $list record
        return \Redirect::route('auth.show', array($user->id));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
