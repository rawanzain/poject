
@extends('layouts.app')

@section('content')

<!-- /.parallax full screen background image -->
<div class="fullscreen landing parallax blog-page" style="background:url('image/busBack.jpg');background-attachment: fixed" data-img-width="2000" data-img-height="1333" data-diff="100">

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
                    صفحة التواصل
                </h2>
            </div>
        </div>
    </div>
</div>



<!-- /.contact section -->
<div id="contact">
    <div class="container padding-b-50">
        <div class="row wow fadeInUp padding-b-50 padding-t-50">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title padding-b-50">
                <!-- /.contact title -->
                <div class="row row-feat wow fadeInUp">
                    <div class="text-center">
                        <h2 class="wow fadeInLeft animated">نحن هنا لي مساعدتك</h2>
                        <div class="title-line wow fadeInRight animated"></div>
                    </div>
                    <br>
                    <p> تواصل معانا </p>
                </div>
            </div>

            <div class="row wow fadeInUp padding-b-50 padding-t-50">
                <div class="col-sm-4 center cantact-tool">
                    <div class="icon">
                        <i class="pe-7s-map-marker pe-5x pe-va wow fadeInUp"></i>
                    </div>
                    <h4 class="text-uppercase">العنوان</h4>
                    <div class="inner">
                        <p>جامعة السودان  <br>الخرطوم<br>الغربي</p>
                    </div>
                </div>
                <!-- /.feature 1 -->

                <div class="col-sm-4 center cantact-tool">
                    <div class="icon">
                        <i class="pe-7s-call pe-5x pe-va wow fadeInUp"></i>
                    </div>
                    <h4 class="text-uppercase">التلفون</h4>
                    <div class="inner">
                        <p>الموبايل
                            <br> <b>+249929571361</b>
                        </p>
                    </div>
                </div>
                <!-- /.feature 1 -->

                <div class="col-sm-4 center cantact-tool">
                    <div class="icon">
                        <i class="pe-7s-mail pe-5x pe-va wow fadeInUp"></i>
                    </div>
                    <h4 class="text-uppercase">الايميل</h4>
                    <div class="inner">
                        <p> الايميل</p><br>
                            <br> <b> Tarhily@company.com</b><br><b></b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-contact wow fadeInUp col-md-8 col-md-offset-2">
            <div class="text-center padding-b-50">
                <h2 class="wow fadeInLeft animated">تواصل</h2>
                <div class="title-line wow fadeInRight animated"></div>
            </div>
            <form action="{{route('contact.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="firstname" >الاسم الاخير</label>
                            <input class="form-control" id="firstname" type="text" name="lastname">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="lastname" >الاسم الاول</label>
                            <input class="form-control" id="lastname" type="text" name="firstname">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email" >الايميل</label>
                            <input class="form-control" id="email" type="text" name="email">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="subject">العنوان</label>
                            <input class="form-control" id="subject" type="text" name="subject">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="message">الموضوع</label>
                            <textarea id="message" class="form-control" name="message"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">
                            ارسال رسالة</button>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- /.row -->
            </form>
        </div>


    </div>
</div>





<script>
    new WOW().init();
</script>

@endsection