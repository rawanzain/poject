<?php

namespace App\Http\Controllers;

use App\Http\Requests\DriverRequest;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
        $driver = Driver::find(1);
        $students = $driver->students;
        return view ('front.studentsofdriver' , compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      /*  Driver::create([
            'name'=>$request->name,
            'user_id'=>Auth::id(),
            'lience' => $request->lience,
            'state' => $request->state,
            'car_image'=>$request->car_image,
'start'=>$request->start,
'end'=>$request->end,
            'specification'=>$request->specification,
            'price' =>$request->price,
            'model'=>$request->model,
            'color'=>$request->color,
            'quantity' => $request->quantity,

        ]);
*/




        $input = $request->all();

        $image_name = $this->uploadImage('image/driver' , $request->car_image);


        $arrayToString = implode(',',$request->input('specification'));

            
        $input['specification'] = $arrayToString;


        $input['car_image'] = $image_name;


        $input['user_id']=Auth::id();


        $d = Driver::create($input);



        Auth::user()->update([
            'confirm' =>1
        ]);



        return redirect()->route('welcome');




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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadImage ($folder , $image){
        $image_extension = $image->getClientOriginalExtension();
        $image_name = $folder ."/". time().".".$image_extension ;
        $image->move($folder , $image_name);
        return $image_name;
    }












}
