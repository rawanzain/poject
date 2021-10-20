<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\StateRequest;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class StateController extends Controller
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
        $states = State::all();
        return view('admin.state.index', compact('states'));

    }

    public function create()
    {
        return view('admin.state.create');

    }

    public function store(StateRequest $request)
    {

        State::create([
            'name' => $request->name,

        ]);

        return redirect()->route('state.index')->with(['success' => 'تم اضافة المحلية بنجاح']);

    }

    public function edit($id)
    {
        $state = State::find($id);
        return view('admin.state.edit', compact('state'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StateRequest $request, $id)
    {
        $state = State::find($id);

        $state->update([
            'name' => $request->name,
        ]);

        return redirect()->route('state.index')->with(['success' => 'تم تعديل المحلية بنجاح']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = State::find($id);


        $state->delete();
        return redirect()->route('state.index')->with(['success' => 'تم حذف المحلية بنجاح']);

    }

    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)
            ->get(["name","id"]);
        return response()->json($data);
    }


}










