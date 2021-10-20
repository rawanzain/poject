<?php

namespace App\Http\Controllers;

use App\Mail\Mail1;
use App\Models\Bus;
use App\Models\Driver;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\notifyEmail;


class TryController extends Controller
{
    public function trys($id)
    {
         $buss= Bus::all();

        $student = Student::find($id);
            if($student->bus_id == Null){

                foreach($buss as $bus){
                    if($student->state == $bus->state){

                      $student->bus_id = $bus->id;
                      $student->save();

                     $bus->update([
                         'quantity'=>$bus->quantity-1
                     ]);
                  }
                  }
              }




                $data = ['message' => "شكرا على اختيار مواقعنا الرجاء الدخول الى الحساب لمعرفة تفاصيل الرحال الخاص بيك"];


Mail::to($student->user->email)->send(new notifyEmail($data));

        return redirect()->route('thanks1');

        }













    public function thanks(){
        return view('front.thanks2');
    }







public function d(){
        return 'd';
}



















}
