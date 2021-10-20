
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

    .designers .card:hover .card-body {
        transform: translateY(70%);
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
        position: absolute;
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



    #ads .card:hover {
        background: #fff;
        box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
        border-radius: 4px;
        transition: all 0.3s ease;
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

    #ads .ad-btn:hover {
        background-color: #e6de08;
        color: #1e1717;
        border: 2px solid #e6de08;
        background: transparent;
        transition: all 0.3s ease;
        box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
    }

    #ads .ad-title h5 {
        text-transform: uppercase;
        font-size: 18px;
    }

</style>
<!-- /.parallax full screen background image -->
<div class="fullscreen landing parallax" style="background-image:url('image/bus.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- /.logo -->
                    <div class="logo wow fadeInDown">
                        <!-- <a href=""><img src="{{URL::asset('image/logo.png')}}" alt="logo"></a> -->
                        <h1><span class="color"></span> </h1>

                    </div>

                    <!-- /.main title -->
                    <h1 class="wow fadeInRight text-capitalize">
                         <span class="color">عن</span> الموقع
                    </h1>

                    <!-- /.header paragraph -->
                    <div class="landing-text wow fadeInUp">
                        <p>الموقغ يقدم للطالب افضل طريقة لي اختيار الترحيل العام والخاص بي افضل الاسعار </p>
                    </div>

                    <!-- /.header button -->
                    <div class="head-btn wow fadeInLeft">
                        <a href="contact.html" class="btn btn-primary">المزيد </a>
                        <a href="my-account.html" class="btn btn-default">الحساب </a>
                    </div>
                    <br><br><br><br><br><br><br><br>

                </div>
            </div>
            </form>
        </div>

    </div>
</div>
</div>
</div>
</div>




<div id="intro">
    <div class="container ">
        <div class="row">
            <!-- /.intro image -->
            <div class="col-md-6 intro-pic wow slideInLeft">
            <h2 class="wow fadeInLeft text-center"> بحث متقدم </h2>
    <div class="title-line wow fadeInRight"></div>

<form action="{{route('search1')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="country">المحلية</label>
        <select class="form-control" id="state-dropdown" name="state">
            <option value="">المحلية</option>
            @foreach ($states as $state)
                <option value="{{$state->name}}">
                    {{$state->name}}
                </option>
            @endforeach
        </select>
        @error("state")
        <span class="text-danger">{{ $message }} </span>
        @enderror

    </div>

    <div class="form-group">
        <label for="country">المنطقة</label>
        <select class="form-control" id="city-dropdown" name="city">
        </select>
        @error("state")
        <span class="text-danger">{{ $message }} </spa n>
        @enderror

    </div>
    <div class="form-group">

    <label for="country">عدد الركاب</label>
         <input type="text" name="quantity" class="form-control">
    </div>
    <div class="form-group">

    <label for="country"> السعر</label>
    <input type="text" name="price" class="form-control">
    </div>
<input type="submit"  value="بحث" class="btn text-center">


</form>


            </div>

            <!-- /.intro content -->
            <div class="col-md-6 wow slideInRight">
            <img src="{{ URL::asset('front/images/taxi_man.png')}}" alt="image" class="img-responsive">


            </div>
        </div>
    </div>
</div>



<!-- /.Cars section -->

<div class="container">
    <br>
    <br>
    <div class="text-center">
        <h2 class="wow fadeInLeft"> العروض </h2>
        <div class="title-line wow fadeInRight"></div>
    </div>

        <!-- what is this btw ?? -->
        <div class="row" id="ads">
        @foreach($drivers as $driver)
        <div class="col-md-4">
            <div class="card rounded">
                <div class="card-image">
                    <img class="img-fluid" src="{{ URL::asset($driver->car_image)}}"  alt="" WIDTH="300" height="300"/>
                </div>
                <div class="card-image-overlay m-auto text-center">
            
                    <span class="card-detail-badge">الزمن : {{date('h:i',strtoTime($driver->start))}} - {{date('h:i',strtoTime($driver->ثىي))}}</span>
                    <span class="card-detail-badge">${{$driver->price}}</span>
                    <span class="card-detail-badge">{{$driver->quantity}} مقاعد</span>
                </div>
                <div class="card-body text-center">
                    <div class="ad-title m-auto">
                        <h5>{{$driver->name}}</h5>
                    </div>
                    <a class="ad-btn" href="{{route('subscript' , $driver->id)}}">اشتراك</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<!-- /.intro section -->
<div id="intro">
    <div class="container">
        <div class="row">
            <!-- /.intro image -->
            <div class="col-md-6 intro-pic wow slideInLeft">
                <img src="{{ URL::asset('front/images/taxi_man.png')}}" alt="image" class="img-responsive">
            </div>

            <!-- /.intro content -->
            <div class="col-md-6 wow slideInRight">
                <!-- <h2>    </h2> -->
                
                <ul style="font-size:24px;">
                    <li><i class="fa fa-check color"> </i>  التوصيل الساهل</li>
                    <li><i class="fa fa-check color"> </i> السعر المناسب </li>
                    <li><i class="fa fa-check color"> </i> الطريقة الامانة </li>
                    <li><i class="fa fa-check color"> </i> ذهاب وعودة    </li>
                    <li><i class="fa fa-check color"> </i> الراحة  </li>
                </ul>                

            </div>
        </div>
    </div>
</div>

<!-- /.contact section -->
<div id="contact">
    <div class="action fullscreen parallax" style="background-image:url('image/way.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">
        <div class="overlay">
            <div class="container">
                <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">

                    <!-- /.download title -->
                    <h2 class="wow fadeInRight">هل تريد ان تعرف اكثر؟</h2>
                    <p class="contact_text wow fadeInLeft">
                        اذا اردت ان تعرف اكثر تواصل معانا عن طريق الصفحة وسيتم الرد عليك في اقرب فرضة.
                    </p>

                    <!-- /.download button -->
                    <div class="contact-cta wow fadeInLeft">
                        <ul class="contact-ul">
                            <li class="contactbutton call wow fadeInUp animated">
                                <a href="#">
                                    <i class="pe-7s-call"></i>
                                    <p><small>رقم التلفون</small><br>+249929571361</p>
                                </a>
                            </li>
                            <li class="contactbutton email wow fadeInUp animated" data-wow-delay="0.2s">
                                <a href="#">
                                    <i class="pe-7s-mail"></i>
                                    <p><small>ارسل لنا بريد الكتروني</small><br>Tarhily@gmail.com</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.testimonial section -->
<div id="design">
    <br>
    <div class="container">
        <div class="text-center">
            <h2 class="wow fadeInLeft">المصممين</h2>
            <div class="title-line wow fadeInRight"></div>
        </div>
        <div class="designers">
            
            <div class="card">
                <img src="image/avatar2.png" class="card-img-top"></img>
                <div class="card-body">
                    <h4 class="m-0 card-title">روان اسماعيل</h4>
                    <div class="card-subtitle">مصمم</div>
                </div>
            </div>

            <div class="card">
                <img src="image/avatar.jpg" class="card-img-top"></img>
                <div class="card-body">
                    <h4 class="m-0 card-title">حمزة سفيان</h4>
                    <div class="card-subtitle">مصمم</div>
                </div>
            </div>

            <div class="card">
                <img src="image/avatar2.png" class="card-img-top"></img>
                <div class="card-body">
                    <h4 class="m-0 card-title"> اماسي عثمان</h4>
                    <div class="card-subtitle">مصمم</div>
                </div>
            </div>

        </div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>


    @endsection