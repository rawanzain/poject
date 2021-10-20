<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Http\Requests\DriverRequest;
use App\Models\City;
use App\Models\Collage;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('type' , 1)->get();
        return view('admin.login.index' , compact('users'));

    }

    public function create()
    {
        return view('admin.login.create');

    }



    public function store(CityRequest $request)
    {


    }


    public function show($id)
    {

        return view('admin.login.edit');

    }


    public function edit($id)
    {
        return view('admin.login.edit');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('user.index')->with(['success' => 'تم تعديل المدينة بنجاح']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);


        $user->delete();

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        return redirect()->route('user.index')->with(['success' => 'تم حذف المدينة بنجاح']);















    }


}


