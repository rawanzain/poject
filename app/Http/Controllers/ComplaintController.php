<?php

namespace App\Http\Controllers;

use App\Mail\BusComplaintMail;
use App\Mail\ComplaintMail;
use App\Mail\DriverComplaintMail;
use App\Models\Bus;
use App\Models\Complaint;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $complaints = Complaint::all();
        return view ('admin.complaint.index' , compact('complaints'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Complaint::create([
            'driver_id'=>$request->driver_id,
            'type'=>$request->type,
            'kind'=>$request->kind,
            'message'=>$request->message,

        ]);

      return redirect()->back();


    }














    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $complaint = Complaint::find($id);

        return view('admin.complaint.edit' , compact('complaint' ));


    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $complaint = Complaint::find($id);

        $complaint->update([
            'driver_id'=>$request->driver_id,
            'type'=>$request->type,
            'message'=>$request->message,

        ]);

        return redirect()->route('complaint.index')->with(['success' => 'تم تعديل الشكوى بنجاح']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $complaint = Complaint::find($id);


        $complaint->delete();

        return redirect()->route('complaint.index')->with(['success' => 'تم حذف الشكوى بنجاح']);

    }
    public function showreplay($id){
         $complaint = Complaint::find($id);

         $kind = $complaint->kind;
         $ids = $complaint->driver_id;

         if($kind == 0){
             $driver = Driver::find($ids);

             return view('admin.complaint.replay' , compact('driver'));

         }else if($kind==1){


             $bus = Bus::find($ids);

             return view('admin.complaint.replay' , compact('bus'));


         }
         else{
             return redirect()->back();

         }




    }

    public function sendreplay(Request $request){
  if($request->has('driver_id')){
      $driver = Driver::find($request->driver_id);

      $data = $request->except('_token');



      Mail::to($driver->user->email)->send(new DriverComplaintMail($driver , $data));

  }

        if($request->has('bus_id')){
            $driver = Bus::find($request->bus_id);

            $data = $request->except('_token');

            Mail::to("bus@bus.com")->send(new BusComplaintMail($driver , $data));

        }


        return redirect()->back();
    }
}
















