<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminContactController extends Controller
{



    public function show(){
        $contacts = Contact::all();
        return view('admin.contact.index' , compact('contacts'));
    }

    public function replay(){

    }

    public function destroy($id)
    {
        $contact = Contact::find($id);


        $contact->delete();
        return redirect()->route('admin-contact')->with(['success' => 'تم حذف الطالب بنجاح']);

    }




















}
