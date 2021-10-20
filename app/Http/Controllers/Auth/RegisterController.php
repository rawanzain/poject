<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;



    public function redirectTo(){
        if(Auth::user()->hasRole('student')){
            return '/student-account';
        }else if(Auth::user()->hasRole('driver')){
            return '/driver-account';
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
$message = [
    'name.required' =>'يجب ادخال الاسم',
    'email.required' =>'يجب ادخال الايميل',
    'email.email' =>'يجب ادخال ايميل',
    'email.unique' =>'الايميل متشرك مسبقا  ',
    
    'password.required' =>'يجب ادخال كلمة السر',
    'type.required' =>'يجب تحديد النوع ',
    'phone.required' =>'يجب ادخال الرقم  ',


];
        return Validator::make($data, [
            'name' => 'required' ,
            'email' => 'required | email | unique:users' ,
            'password' => 'required' ,
            'phone' => 'required' ,
           
            'type' => 'required' ,

        ] , $message);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {



        $user = User::create([
            'name' => $data['name'],
            'type'=>$data['type'],
            'email' => $data['email'],
            'phone'=>$data['phone'],
            'password' => Hash::make($data['password']),
        ]);




        if($data['type'] == 2){
              $user->attachRole('driver');
        }

        if($data['type'] == 3){
            $user->attachRole('student');

        }

        return $user;

    }
}
















