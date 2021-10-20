<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class searchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $name = $request->search;

        $drivers = Driver::where('name' , $name)->orWhere('state' , $name)->orWhere('city' ,$name)->get();
        return view ('front.search' ,compact('drivers'));


    }

    public function search1(Request $request)
    {

//        $drivers = Driver::where('state' , $request->state)->orWhere('city' , $request->city)->get();
        $drivers = Driver::where([['state' ,'=', $request->state] , ['city' , '=',$request->city] , ['quantity' ,'>=' ,$request->quantity] ,  ['price','<=',$request->price] ])->get();

        return view ('front.search' ,compact('drivers'));


    }
}






