<?php

namespace App\Http\Controllers;
use App\Mail\DriverMail;
use App\Mail\StudentMail;
use App\Models\Bus;
use App\Models\State;
use App\Models\Driver;
use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SubscriptController extends Controller
{

 public function thanks($type){
    
    return view('front.thanks' , compact('type'));
    
 }

 public function deletestudent($id , $type){
$student = Student::find($id);

if($type==1){
         $student->update([
             'driver_id' => NULL,
         ]);
     }
     if($type==2){
         $student->update([
             'bus_id' => NULL,
         ]);
     }
     return redirect()->back();
 }

public function store($id){

    $student = Auth::user()->student;
     $driver = Driver::find($id);

if($driver->start < $student->start && $student->end < $driver->end){
    $student->update([
        'driver_id' => $id
    ]);

    $student->driver->update([
       'quantity' =>  $student->driver->quantity-1
    ]);
   Mail::to($student->driver->user->email)->send(new DriverMail($student->driver));
    Mail::to(Auth::user()->email)->send(new StudentMail($student));

    return redirect()->route('thanks' , 'sussces');


}
   
    

    return redirect()->route('thanks' , 'error');
}

public function rating($id , Request $request){
    $driver = Driver::find($id);
    $driver->rate($request->rate);

    return redirect()->back();
}















public function destroy($id){
    $student = Student::find($id);

    $student->update([
        'driver_id' => NULL

    ]);
    return redirect()->back();
}

public function showbus($id){
    $student = Student::find($id);
    $bus = Bus::where('state' ,$student->state )->first();

    return view('front.showbus' , compact('bus'));

}














}
