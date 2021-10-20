<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Http\Requests\DriverRequest;
use App\Models\City;
use App\Models\Collage;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citys = City::all();
        return view('admin.city.index' , compact('citys'));

    }

    public function create()
    {
        $states = State::all();
        return view('admin.city.create', compact('states'));

    }

    public function store(CityRequest $request)
    {

        City::create([
            'name' => $request->name,
            'state_id' => $request->state_id,

        ]);

        return redirect()->route('city.index')->with(['success' => 'تم اضافة المنطقة بنجاح']);

    }


    public function edit($id)
    {
        $states = State::all();
        $city = City::find($id);
        return view('admin.city.edit', compact('city' ,'states'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CityRequest $request, $id)
    {

        $city = City::find($id);

        $city->update([
            'name' => $request->name,
        ]);

        return redirect()->route('city.index')->with(['success' => 'تم تعديل المنطقة بنجاح']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $City = City::find($id);


        $City->delete();

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        return redirect()->route('city.index')->with(['success' => 'تم حذف المنطقة بنجاح']);















    }


}


