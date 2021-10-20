<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\State;
use App\Models\Driver;
use App\Models\Student;

use Illuminate\Http\Request;

class PageController extends Controller
{




    public function welcome()
    {
        $drivers = Driver::all()->take(3);
        $states = State::all();

        return view ('front.welcome' , compact('drivers' , 'states'));
    }


    public function driveraccount()
    {
        $states = State::all();
        $citys = City::all();

        return view ('front.driveraccount' , compact('states' , 'citys'));
    }


    public function studentaccount()
    {
        $states = State::all();
        $citys = City::all();

        return view ('front.studentaccount' , compact('states','citys'));
    }

    public function contact()
    {
        return view ('front.contact');
    }


    public function aboutus()
    {
        return view ('front.aboutus');
    }



    public function service()
    {
        $drivers = Driver::where('quantity' , '!=', 0)->get();
        return view ('front.service' ,compact('drivers'));
    }




















}
