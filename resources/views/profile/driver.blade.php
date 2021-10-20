@extends('layouts.app')

@section('content')

    <style>
        th,td{
            text-align: center;
        }
    </style>


<div class="container padding-t-50 padding-b-50">

    <span class="counter pull-right"></span>


    <table class="table table-hover table-bordered results">
        <thead>


        </thead>
        <tbody>

@if(isset($driver))
        <tr>
            <th>#</th>
            <th >الاسم</th>
            <th >المنطقة</th>
            <th>الهاتف</th>
            <th > بداية الزمن</th>
            <th >نهاية الزمن</th>
            <th > حذف</th>



        @foreach($driver->students as $index => $student)

            </tr>
            <tr>

            <th scope="row">{{$index+1}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->city}}</td>
            <td>{{$student->user->phone}}</td>

            <td>{{$student->start}}</td>
            <td>{{$student->end}}</td>
               <td>
                <form action="{{route('destroy-student',$student->id)}}" method="post">
                    @csrf
                    <input type="submit"
                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
                           data-toggle="modal"
                           data-target="#rotateInUpRight"
                           VALUE="حذف">

                </form>
</td>
        </tr>
        @endforeach

        </tbody>
    </table>
        @else

            <div class="container" style="margin:150px 100px 270px 0px;">
                <h2 class="wow fadeInRight text-capitalize">
                    <span class="color" > لا يوجد طلاب حاليا</span>
                </h2>
            </div>
                @endif


</div>
<div class="claerfix"></div>


@endsection