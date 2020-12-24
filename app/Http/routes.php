<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('applications/recruiter/', array('as'=>'allJobApplications','uses' => 'ApplicationController@applications_for_recruiter')); 

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',
	array('as'=>'home','uses'=>'HomeController@Index'));

Route::get('auth/register', 
	array('as'=>'getRegister','uses'=>'Auth\AuthController@getRegister'));
Route::post('auth/register',
	array('as'=>'postRegister','uses'=>'Auth\AuthController@postRegister'));

Route::get('auth/login', 
	array('as'=>'getLogin','uses'=>'Auth\AuthController@getLogin'));
Route::post('auth/login',
	array('as'=>'postLogin','uses'=>'Auth\AuthController@postLogin'));

Route::get('auth/logout', 
	array('as'=>'getLogout','uses'=>'Auth\AuthController@getLogout'));

Route::group(array('prefix'=>'admin','namespace'=>'admin'), function() 
{
  Route::resource('user','UserController');
});

Route::get('admin/user', 
	array('as'=>'getUsers','uses'=>'Admin\UserController@index'));

Route::get('lists/myvacancies/', array('as'=>'allMyVacancies','uses' => 'ListsController@myvacancies')); // Route to tajikistan Page
Route::resource('lists.applications', 'ApplicationController');
Route::get('applications/status/{id}', array('as'=>'editStatus','uses' => 'ApplicationController@edit')); 

Route::put('applications/updateStatus/{id}', array('as'=>'updateStatus','uses' => 'ApplicationController@update')); 

Route::resource('lists', 'ListsController');
Route::resource('auth', 'ProfileController');

Route::get('auth/profile/{id}', 
	array('as'=>'getProfile','uses'=>'ProfileController@show'));

Route::get('lists/create', array('as'=>'createVacancy','uses' => 'ListsController@create')); // Route to tajikistan Page
Route::get('lists/', array('as'=>'allVacancies','uses' => 'ListsController@index')); // Route to tajikistan Page

Route::get('applications/jobseeker/', array('as'=>'allApplications','uses' => 'ApplicationController@index')); 
Route::get('jobseeker/list', array('as'=>'allJobseeker','uses' => 'DiagrammController@index'));
 
Route::get('applications/status/', array('as'=>'status','uses' => 'ApplicationController@createStatus')); 

Route::get('createapps', array('as'=>'createApplication','uses' => 'ApplicationController@createApp')); 

Route::get('applications/{application}', array('as'=>'showApplication','uses' => 'ApplicationController@show'));



Route::group(array('prefix'=>'jobseeker','namespace'=>'jobseeker', 'middleware'=>'jobseeker'), function() 
{ 
  Route::resource('user','UserController'); 
});
//Route::get('/apps/create', 'ApplicationController@createApp')->name('createApplication');