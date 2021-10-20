
@extends('layouts.app')

@section('content')
<style>
    #header {
        background: url() center center / cover no-repeat ;
    }
    /* FontAwesome for working BootSnippet :> */

    #team {
        background: #eee !important;
    }

    /* .btn-primary:hover,
    .btn-primary:focus {
        background-color: #108d6f;
        border-color: #108d6f;
        box-shadow: none;
        outline: none;
    } */

        /* .btn-primary {
        color: #fff;
        background-color: #007b5e;
        border-color: #007b5e;
    } */
        .btn-primary { 
            color: #222;   
        }
        .btn-primary:hover {
            background: #222;
            color: #fed22d;
        }
    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #team .card {
        border: none;
        background: #ffffff;
    }

    .image-flip:hover .backside,
    .image-flip.hover .backside {
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
        border-radius: .25rem;
    }

    .image-flip:hover .frontside,
    .image-flip.hover .frontside {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .mainflip {
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -ms-transition: 1s;
        -moz-transition: 1s;
        -moz-transform: perspective(1000px);
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
        position: relative;
    }

    .frontside {
        position: relative;
        -webkit-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        z-index: 2;
        margin-bottom: 30px;
    }

    .backside {
        position: absolute;
        top: 0;
        left: 0;
        background: white;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
        -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    }

    .frontside,
    .backside {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -moz-transition: 1s;
        -moz-transform-style: preserve-3d;
        -o-transition: 1s;
        -o-transform-style: preserve-3d;
        -ms-transition: 1s;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
    }

    .frontside .card,
    .backside .card {

        min-height: 312px;
    }

    .backside .card a {
        font-size: 18px;
        color: #007b5e !important;
    }

    .frontside .card .card-title,
    .backside .card .card-title {
        color: #007b5e !important;
    }

    .frontside .card .card-body img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }
</style>
    <nav class="bg-dark navbar-dark">
        <div class="container">
        </div>
    </nav>
    <section id="header" class="jumbotron text-center" style="background-image:url('image/towBuses.jpg'); background-width:100px; color:white;">
        <h1 class="display-3">العروض</h1>
        <h2 class="lead" >يمكن الاشتراك في ترحيل الجامعة وسوف نجد لك انسب ترحيل.</h2>
        @if(Auth::guest())
          <h3>  يجب ان تسجل كطالب </h3>
        @else

            @if(Auth::user()->hasRole('student'))

        <form action="{{route('show-bus' , Auth::user()->student->id)}}" method="get">
            @csrf
            <input type="submit" class="btn btn-primary" value="اشتراك">
        </form>


            @endif
        @endif

    </section>


<section>

    <form method="post" action="{{route('search')}}">
        @csrf
    <center>
        <div class="form-group" style="width: 400px;">

        <input type="text" name="search" class="form-control " >

        <input type="submit" value="بحث" class="form-control btn btn-primary">

        </div>
    </form>
</section>


<!------ Include the above in your HEAD tag ---------->










<!-- Team -->
<section id="team" class="pb-5">
    <div class="container" style="text-align: right;">
        <div class="row">
            <!-- Team member -->
            @foreach($drivers as $driver)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <br>
                                    <img class="card-img-top" src="{{$driver->car_image}}" alt="card image">
                                    <h4 class="card-title"> الاسم : {{$driver->name}} </h4>
                                    <p class="card-text">نوع السيارة : {{$driver->model}}</p>
                                    <p class="card-text">المنطقة  : {{$driver->state}} - {{$driver->city}}</p>
                                    <p class="card-text">السعر  : {{$driver->price}}</p>
                                    <p>
                                       @for($star=1 ; $star<=5 ; $star++)
                                           @if($driver->averageRating >= $star)
                                                <i class="glyphicon glyphicon-star"></i>

                                               @else
                                                <i class="glyphicon glyphicon-star-empty"></i>

                                               @endif
                                        @endfor
                                        </p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="width:35rem; height:43rem;">
                                <div class="card-body text-center ">
                                    <h4 class="card-title"> اسم السائق {{$driver->name}} </h4>
                                    <p class="card-text">   نوع السيارة : {{$driver->model}} </p>
                                    <p class="card-text">اللون : {{$driver->color}} </p>
                                    <p class="card-text">المناطق التي يمكن ان يمر بيها</p>
                                    <p class="card-text">{{$driver->place}}</p>

                                    <p class="card-text">الزمن : {{date('h:i',strtoTime($driver->start))}} - {{date('h:i',strtoTime($driver->end))}}</p>
                                    <p class="card-text">المميزات</p>
                                    <p class="card-text">{{$driver->specification}}</p>
                                    

                                    <a class="list-inline-item btn btn-sm btn-primary" href="{{route('subscript' , $driver->id)}}">
                                          اشترك
                                        </a>

                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                        </li>
                                        <li class="list-inline-item">
                                        </li>
                                        <li class="list-inline-item">
                                        </li>
                                        <li class="list-inline-item">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         @endforeach
        </div>
    </div>
</section>
<!-- Team -->
    @endsection