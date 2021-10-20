<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    


    //protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo(){
     if(Auth::user()->hasRole('superadmin')){
             return '/admin/dashboard';
     }else if(Auth::user()->hasRole('admin')){
         return '/admin/dashboard';
     }else if(Auth::user()->hasRole('student')){
         if(Auth::user()->confirm == 1){
             return '/';

         }else{
             return '/student-account';
         }
     }
     else if(Auth::user()->hasRole('driver')){
         if(Auth::user()->confirm == 0){
             return '/driver-account';

         }else{
             return '/';
         }
     }else{

     }


    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
