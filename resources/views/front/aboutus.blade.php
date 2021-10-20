
@extends('layouts.app')

@section('content')

    <!-- /.parallax full screen background image -->
    <div class="fullscreen landing parallax blog-page" style="background-image:url('images/contact-icon.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

        <div class="overlay">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <!-- /.logo -->
                    <div class="logo wow fadeInDown" style="margin-top: 50px">
                        <!-- <a href="index.html"><img src="images/logo.png" alt="logo"></a> -->
                        <h1><span class="color"></span> </h1>
                    </div>
                    <!-- /.main title -->
                    <h2 class="wow fadeInUp" style="margin-bottom: 50px">
من نحن
                    </h2>
                </div>
            </div>
        </div>
    </div>



<!-- /.parallax full screen background image -->
<!-- /.testimonial section -->
<div id="testi">
    <div class="container">
        <div class="text-center">
            <h2 class="wow fadeInLeft">المصممين</h2>
            <div class="title-line wow fadeInRight"></div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div id="owl-testi" class="owl-carousel owl-theme wow fadeInUp">

                    <!-- /.testimonial 1 -->
                    <div class="testi-item">
                        <div class="client-pic text-center">

                            <!-- /.client photo -->
                            <img src="{{ URL::asset('front/images/icon.png')}}" alt="client">
                        </div>
                        <div class="box">

                            <!-- /.testimonial content -->
                            <p class="message text-center">"
                                مصمم الموقع    </p>
                        </div>
                        <div class="client-info text-center">

                            <!-- /.client name -->
                            حمزة سفيان, <span class="company">المصمم</span>
                        </div>
                    </div>

                    <!-- /.testimonial 2 -->
                    <div class="testi-item">
                        <div class="client-pic text-center">

                            <!-- /.client photo -->
                            <img src="{{ URL::asset('front/images/icon.png')}}" alt="client">
                        </div>
                        <div class="box">

                            <!-- /.testimonial content -->
                            <p class="message text-center">مصمم</p>
                        </div>
                        <div class="client-info text-center">

                            <!-- /.client name -->
                            روان زين, <span class="company">مصمم</span>
                        </div>
                    </div>

                    <!-- /.testimonial 3 -->
                    <div class="testi-item">
                        <div class="client-pic text-center">

                            <!-- /.client photo -->
                            <img src="{{ URL::asset('front/images/icon.png')}}" alt="client">
                        </div>
                        <div class="box">

                            <!-- /.testimonial content -->
                            <p class="message text-center">"
                                المصمم</p>
                        </div>
                        <div class="client-info text-center">

                            <!-- /.client name -->
                            اماسي عثمان, <span class="company">مصمم</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>















<!-- /.package 1 -->


<!-- /.package icon -->


<!-- /.price -->


<!-- /.package features -->


<!-- /.package button -->


<!-- /.package 2 -->


<!-- /.package icon -->
<

<!-- /.price -->


<!-- /.package button -->


<!-- /.package 3 -->


<!-- /.price -->


<!-- /.package button -->


<!-- /.package 4 -->


<!-- /.price -->


<!-- /.package button -->

</div>
</div>

</div>
</div>
</div>


    @endsection