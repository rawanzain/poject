<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StateRequest;
use App\Http\Requests\StudentRequest;
use App\Models\City;
use App\Models\State;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{



    public function index()
    {
        $students = Student::all();
        return view ('admin.student.index' , compact('students'));
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
        $student = Student::find($id);
        $states = State::all();
        $citys = City::all();

        return view('admin.student.edit' , compact('student' ,'states' , 'citys'));
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $student = Student::find($id);

        $student->update([
            'name'=>$request->name,
            'department' => $request->department,
            'year' => $request->year,
            'state' => $request->state,
            'city' => $request->city,
            'start' =>$request->start,
            'end' =>$request->end,
        ]);

        return redirect()->route('student-a.index')->with(['success' => 'تم تعديل الطالب بنجاح']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);


            $student->delete();
        return redirect()->route('student-a.index')->with(['success' => 'تم حذف الطالب بنجاح']);

    }
}












