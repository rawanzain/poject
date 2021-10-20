<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DriverRequest;
use App\Models\City;
use App\Models\State;
use App\Models\Driver;
use Illuminate\Http\Request;

class AdminDriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

    }



    public function index()
    {
        $drivers = Driver::all();
        return view ('Admin.driver.index' , compact('drivers'));

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
    public function store(DriverRequest $request)
    {



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
        $driver = Driver::find($id);
        $states = State::all();
        $citys = City::all();

        return view('admin.driver.edit' , compact('driver' , 'states' ,'citys'));


    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DriverRequest $request, $id)
    {
        $driver = Driver::find($id);

        $driver->update([
            'name'=>$request->name,
            'lience' => $request->lience,
            'state' => $request->state,
            'city' => $request->city,
            'price' =>$request->price,
            'model'=>$request->model,
            'color'=>$request->color,
            'start'=>$request->start,
            'end'=>$request->end,
            'quantity' => $request->quantity,
            'specification' => $request->specification,

            ]);

        return redirect()->route('driver-a.index')->with(['success' => 'تم تعديل السائق بنجاح']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);


            $driver->delete();

        return redirect()->route('driver-a.index')->with(['success' => 'تم حذف السائق بنجاح']);

    }
}












