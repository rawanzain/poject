<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Student;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{



    public function show(){
        return view('admin.login');
    }

    public function adminlogin(Request $request){

        if (auth()->guard('admin')->attempt(['email' => $request->email , 'password'=> $request->password] )){
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.showlogin');

    }

public function adminRegister(Request $request){

    $user =\App\Models\User::create([
        'name' => $request->name,
        'type'=>$request->type,
        'email' =>$request->email,
        'password' => Hash::make($request->password),
    ]);


$user->attachRole('admin');

    return redirect()->route('user.index');


}


public function edit($id){
    $user = User::find($id);


    return view('admin.login.index' , compact('user'));
}

public function update($id,Request $request){

    $user = \App\Models\User::find($id);
if(Auth::id()==0)
    $type=0;
else
    $type=1;

    $user->update([
        'name' => $request->name,
        'type'=>$type,
        'email' =>$request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('user.index');


}

    public function destroy($id,Request $request){



    }














}
