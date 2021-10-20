
@extends('layouts.app')

@section('content')


<style>

    .designers {
        padding-top: 4rem;
        width: 100%;
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
        gap: 2rem;
        place-content: center;
    }

    .designers .card  {
        position: relative;
        overflow: hidden;
    }

    .designers .card-img-top {
        width: 100%;
        height: 100%;
    }

    .designers .card .card-body {
        background: rgba(0,0,0,0.9);
        color: #fff;
        padding-top: 2rem;
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform: translateY(100%);
        transition: all .4s ease-in-out;
    }



    #ads {
        margin: 30px 0 30px 0;

    }

    #ads .card-notify-badge {
        position: absolute;
        left: -10px;
        top: -20px;
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color: #000;
        padding: 5px 10px;
        font-size: 14px;

    }

    #ads .card-notify-year {
        right: -10px;
        top: -20px;
        background: #ff4444;
        border-radius: 50%;
        text-align: center;
        color: #fff;
        font-size: 14px;
        width: 50px;
        height: 50px;
        padding: 15px 0 0 0;
    }


    #ads .card-detail-badge {
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color: #000;
        padding: 5px 10px;
        font-size: 14px;
    }


    #ads .card-image-overlay {
        font-size: 20px;

    }


    #ads .card-image-overlay span {
        display: inline-block;
    }


    #ads .ad-btn {
        text-transform: uppercase;
        width: 150px;
        height: 40px;
        border-radius: 80px;
        font-size: 16px;
        line-height: 35px;
        text-align: center;
        border: 3px solid #e6de08;
        display: block;
        text-decoration: none;
        margin: 20px auto 1px auto;
        color: #000;
        overflow: hidden;
        position: relative;
        background-color: #e6de08;
    }


    #ads .ad-title h5 {
        text-transform: uppercase;
        font-size: 18px;
    }

</style>

    <nav class="bg-dark navbar-dark">
        <div class="container">
        </div>
    </nav>
    <section id="header" class="jumbotron text-center">
        <h1 class="display-3">العروض</h1>
        <p class="lead">يمكن الاشتراك في ترحيل الجامعة وسوف نجد لك انسب ترحيل.</p>
        @if(Auth::guest())
            يجب ان تسجل كطالب
        @else

            @if(Auth::user()->hasRole('student'))

                <form action="{{route('trys' , Auth::user()->student->id)}}" method="post">
                    @csrf
                    <input type="submit" value="اشتراك">
                </form>


            @endif
        @endif

    </section>




            <div class="container">
                @if(isset($drivers))
                @foreach($drivers as $driver)
                        <div class="row" id="ads">
                                <div class="col-md-12">
                                    <div class="card rounded">
                                        <div class="card-image">
                                        <div class="card-image-overlay m-auto text-center">

                                            <img class="img-fluid pull-left" src="{{ URL::asset($driver->car_image)}}" alt="" WIDTH="200"/>
                                        </div>
                                        <div class="card-image-overlay m-auto">
                                            <span class="card-detail-badge pull-center">الزمن : {{date('h:i',strtoTime($driver->start))}} - {{date('h:i',strtoTime($driver->end))}}</span>
                                            <span class="card-detail-badge">{{$driver->quantity}} مقاعد </span>
                                            <span class="card-detail-badge">${{$driver->price}}$</span>

                                        </div>
                                        <div class="card-body text-center">
                                            <div class="ad-title m-auto">
                                                <h5>{{$driver->name}}</h5>
                                            </div>
                                            <a class="ad-btn pull-right" href="{{route('subscript' , $driver->id)}}">اشتراك</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <hr></hr>
                            @endforeach


                    @else
                       <h2>لا يوجد تطابق</h2>
                @endif
            </div>
    @endsection











