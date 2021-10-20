<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusRequest;
use App\Models\City;
use App\Models\State;
use App\Models\Bus;
use Illuminate\Http\Request;

class AdminBusController extends Controller
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
        $buss = Bus::all();
        return view ('admin.Bus.index' , compact('buss'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        $citys = City::all();

        return view ('admin.Bus.create' , compact('states' , 'citys'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusRequest $request)
    {



        Bus::create([
            'name'=>$request->name,
            'lience' => $request->lience,
            'state' => $request->state,
            'city' => $request->city,
            'price' =>$request->price,
            'quantity' => $request->quantity,

        ]);


        return redirect()->route('bus.index')->with(['success' => 'تم اضافة الترحيل بنجاح']);


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
        $bus = Bus::find($id);
        $states = State::all();
        $citys = City::all();

        return view('admin.bus.edit' , compact('bus' , 'states' ,'citys'));


    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusRequest $request, $id)
    {
        $bus = Bus::find($id);

        $bus->update([
            'name'=>$request->name,

            'lience' => $request->lience,
            'country' => $request->country,
            'price' =>$request->price,
            'quantity' => $request->quantity,

            ]);

        return redirect()->route('bus.index')->with(['success' => 'تم تعديل الترحيل بنجاح']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus = Bus::find($id);


            $bus->delete();

        return redirect()->route('bus.index')->with(['success' => 'تم حذف الترحيل بنجاح']);

    }

    public function printStudent($id){
        $bus = Bus::with('students')->find($id);

        return view('admin.bus.print' , compact('bus'));


    }
}












