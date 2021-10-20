<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DriverRequest;
use App\Models\Collage;
use Illuminate\Http\Request;

class CollageController extends Controller
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
        $collages = Collage::all();
        return view ('admin.collage.index' , compact('collages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('admin.collage.create' );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        Collage::create([
            'name'=>$request->name,

        ]);


        return redirect()->route('collage.index')->with(['success' => 'تم اضافة الكلية بنجاح']);


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
        $collage = Collage::find($id);

        return view('admin.collage.edit' , compact('collage' ));


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
        $collage = Collage::find($id);

        $collage->update([
            'name'=>$request->name,

            ]);

        return redirect()->route('collage.index')->with(['success' => 'تم تعديل الكلية بنجاح']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collage = Collage::find($id);


        $collage->delete();

        return redirect()->route('collage.index')->with(['success' => 'تم حذف الكلية بنجاح']);

    }
}












