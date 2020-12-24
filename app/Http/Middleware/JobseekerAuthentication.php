<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard; 

class JobseekerAuthentication
{
    protected $auth; 
 
    public function __construct(Guard $auth) 
    { 
        $this->auth = $auth; 
    } 
 
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) 
        { 
            if ($this->auth->user()->is_jobseeker == true) 
            { 
                return $next($request); 
            } 
        } 
        return \Redirect::route('getLogin'); 
    }
}
