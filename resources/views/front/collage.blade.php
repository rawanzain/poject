
@extends('layouts.app')

@section('content')


<!-- /.parallax full screen background image -->
<div class="fullscreen landing parallax" style="background-image:url('images/bus.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                    <!-- /.logo -->
                    <div class="logo wow fadeInDown">
                        <!-- <a href=""><img src="images/logo2.png')}}" alt="logo"></a> -->
                        <h1><span class="color"></span> </h1>

                    </div>

                    <!-- /.main title -->
                    <h1 class="wow fadeInLeft text-capitalize">
                        About <span class="color">The</span> Website
                    </h1>

                    <!-- /.header paragraph -->
                    <div class="landing-text wow fadeInUp">
                        <p>The website give student the best choice for them to select the bus that want and the comfortable cars with less price compare with the travel from the outside with fixed price.</p>
                    </div>

                    <!-- /.header button -->
                    <div class="head-btn wow fadeInLeft">
                        <a href="contact.html" class="btn btn-primary">Read more</a>
                        <a href="my-account.html" class="btn btn-default">My account</a>
                    </div>


                </div>

                <!-- /.signup form -->

                <!-- <div id="date_time" class="form-group">
                    <input class="form-control input-lg" name="pick_up_date" id="pick_up_date" type="text" placeholder="Pick up date" required>
                    <a class="add-on btn-geolocation btn-calendar" href="#"><i class="pe-7s-date"></i></a>
                </div> -->





            </div>

            </form>
        </div>

    </div>
</div>
</div>
</div>
</div>



<!-- /.Cars section -->
<div id="carssection">
    <div class="container">
        <div class="text-center">
            <h2 class="wow fadeInLeft">SEE OUR OFFERS</h2>
            <div class="title-line wow fadeInRight"></div>
        </div>
        <div class="row carssections">

            <div id="carssections" class="owl-carousel">
                <div class="screen wow fadeInUp" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="{{ asset('images/car1.png')}}"/>
                        <!-- /.package icon -->
                        <!-- <i class="pe-7s-way pe-5x"></i> -->

                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <div class="overflow">
                                <h2>Khartoum to Omdurman(AlThawra)</h2>
                                <!-- <p>Max passanger : 2</p> -->
                            </div>
                            <div class="car-price-content">
                                <b class="overflow car-price">2k-4k</b><b class="price-currency">SD</b><br>

                                <div class="car-details">
                                    <!-- <div class="">                                            
                                        <ul class="car-features">
                                            <li><i class="fa fa-briefcase" data-tooltip=""></i></li>
                                            <li><i class="fa fa-asterisk" data-tooltip=""></i></li>
                                            <li><i class="fa fa-rss" data-tooltip=""></i></li>
                                            <li><i class="fa fa-certificate" data-tooltip=""></i></li>
                                            <li><i class="fa fa-flash" data-tooltip=""></i></li> 
                                            <li><i class="fa fa-music" data-tooltip=""></i></li> 
                                        </ul>
                                        <div class="clearfix"></div> 								
                                    </div>   -->
                                    <div class="">
                                        <ul class="checklist">
                                            <li><i class="fas fa-stopwatch"></i>PickUp from Place</li>
                                            <li><i class="fa fa-check"></i>Reach Place</li>
                                        </ul>
                                    </div>



                                </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="screen wow fadeInUp" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="{{ asset('images/car1.png')}}"/>
                        <!-- /.package icon -->
                        <!-- <i class="pe-7s-way pe-5x"></i> -->

                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <div class="overflow">
                                <h2>Khartoum to Omdurman(Al Waha)</h2>
                                <!-- <p>Max passanger : 2</p> -->
                            </div>
                            <div class="car-price-content">
                                <b class="overflow car-price">2k-3.5k</b><b class="price-currency">SD</b><br>

                            </div>
                            <div class="car-details">
                                <!-- <div class="">                                            
                                    <ul class="car-features">
                                        <li><i class="fa fa-briefcase" data-tooltip=""></i></li>
                                        <li><i class="fa fa-asterisk" data-tooltip=""></i></li>
                                        <li><i class="fa fa-rss" data-tooltip=""></i></li>
                                        <li><i class="fa fa-certificate" data-tooltip=""></i></li>
                                        <li><i class="fa fa-flash" data-tooltip=""></i></li> 
                                        <li><i class="fa fa-music" data-tooltip=""></i></li> 
                                    </ul>
                                    <div class="clearfix"></div> 								
                                </div>   -->
                                <div class="">
                                    <ul class="checklist">
                                        <li><i class="fas fa-stopwatch"></i>PickUp from Place</li>
                                        <li><i class="fa fa-check"></i>Reach Place</li>
                                    </ul>
                                </div>



                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="screen wow fadeInUp" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="{{ asset('images/car1.png')}}"/>
                        <!-- /.package icon -->
                        <!-- <i class="pe-7s-way pe-5x"></i> -->

                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <div class="overflow">
                                <h2>Khartoum to Bahri(Shambat)</h2>
                                <!-- <p>Max passanger : 2</p> -->
                            </div>
                            <div class="car-price-content">
                                <b class="overflow car-price">2k-3k</b><b class="price-currency">SD</b><br>

                            </div>
                            <div class="car-details">
                                <!-- <div class="">                                            
                                    <ul class="car-features">
                                        <li><i class="fa fa-briefcase" data-tooltip=""></i></li>
                                        <li><i class="fa fa-asterisk" data-tooltip=""></i></li>
                                        <li><i class="fa fa-rss" data-tooltip=""></i></li>
                                        <li><i class="fa fa-certificate" data-tooltip=""></i></li>
                                        <li><i class="fa fa-flash" data-tooltip=""></i></li> 
                                        <li><i class="fa fa-music" data-tooltip=""></i></li> 
                                    </ul>
                                    <div class="clearfix"></div> 								
                                </div>   -->
                                <div class="">
                                    <ul class="checklist">
                                        <li><i class="fas fa-stopwatch"></i>PickUp from Place</li>
                                        <li><i class="fa fa-check"></i>Reach Place</li>
                                    </ul>
                                </div>



                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="screen wow fadeInUp" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="{{ asset('images/car1.png')}}"/>
                        <!-- /.package icon -->
                        <!-- <i class="pe-7s-way pe-5x"></i> -->

                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <div class="overflow">
                                <h2>Khartoum to Bahri(Al Shabia)</h2>
                                <!-- <p>Max passanger : 2</p> -->
                            </div>
                            <div class="car-price-content">
                                <b class="overflow car-price">2k-3k</b><b class="price-currency">SD</b><br>

                            </div>
                            <div class="car-details">
                                <!-- <div class="">                                            
                                    <ul class="car-features">
                                        <li><i class="fa fa-briefcase" data-tooltip=""></i></li>
                                        <li><i class="fa fa-asterisk" data-tooltip=""></i></li>
                                        <li><i class="fa fa-rss" data-tooltip=""></i></li>
                                        <li><i class="fa fa-certificate" data-tooltip=""></i></li>
                                        <li><i class="fa fa-flash" data-tooltip=""></i></li> 
                                        <li><i class="fa fa-music" data-tooltip=""></i></li> 
                                    </ul>
                                    <div class="clearfix"></div> 								
                                </div>   -->
                                <div class="">
                                    <ul class="checklist">
                                        <li><i class="fas fa-stopwatch"></i>PickUp from Place</li>
                                        <li><i class="fa fa-check"></i>Reach Place</li>
                                    </ul>
                                </div>



                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="screen wow fadeInUp" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="{{ asset('images/car1.png')}}"/>
                        <!-- /.package icon -->
                        <!-- <i class="pe-7s-way pe-5x"></i> -->

                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <div class="overflow">
                                <h2>Khartoum to Khartoum(Buri)</h2>
                                <!-- <p>Max passanger : 2</p> -->
                            </div>
                            <div class="car-price-content">
                                <b class="overflow car-price">1.5k-2.5k</b><b class="price-currency">SD</b><br>

                            </div>
                            <div class="car-details">
                                <!-- <div class="">                                            
                                    <ul class="car-features">
                                        <li><i class="fa fa-briefcase" data-tooltip=""></i></li>
                                        <li><i class="fa fa-asterisk" data-tooltip=""></i></li>
                                        <li><i class="fa fa-rss" data-tooltip=""></i></li>
                                        <li><i class="fa fa-certificate" data-tooltip=""></i></li>
                                        <li><i class="fa fa-flash" data-tooltip=""></i></li> 
                                        <li><i class="fa fa-music" data-tooltip=""></i></li> 
                                    </ul>
                                    <div class="clearfix"></div> 								
                                </div>   -->
                                <div class="">
                                    <ul class="checklist">
                                        <li><i class="fas fa-stopwatch"></i>PickUp from Place</li>
                                        <li><i class="fa fa-check"></i>Reach Place</li>
                                    </ul>
                                </div>



                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="screen wow fadeInUp" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="{{ asset('images/car1.png')}}"/>
                        <!-- /.package icon -->
                        <!-- <i class="pe-7s-way pe-5x"></i> -->

                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <div class="overflow">
                                <h2>Khartoum to Kartoum(Al Shafa)</h2>
                                <!-- <p>Max passanger : 2</p> -->
                            </div>
                            <div class="car-price-content">
                                <b class="overflow car-price">1.5k-3k</b><b class="price-currency">SD</b><br>

                            </div>
                            <div class="car-details">
                                <!-- <div class="">                                            
                                    <ul class="car-features">
                                        <li><i class="fa fa-briefcase" data-tooltip=""></i></li>
                                        <li><i class="fa fa-asterisk" data-tooltip=""></i></li>
                                        <li><i class="fa fa-rss" data-tooltip=""></i></li>
                                        <li><i class="fa fa-certificate" data-tooltip=""></i></li>
                                        <li><i class="fa fa-flash" data-tooltip=""></i></li> 
                                        <li><i class="fa fa-music" data-tooltip=""></i></li> 
                                    </ul>
                                    <div class="clearfix"></div>                                
                                </div>   -->
                                <div class="">
                                    <ul class="checklist">
                                        <li><i class="fas fa-stopwatch"></i>PickUp from Place</li>
                                        <li><i class="fa fa-check"></i>Reach Place</li>
                                    </ul>
                                </div>



                            </div>
                        </figcaption>
                    </figure>
                </div>




            </div>
        </div>
    </div>
</div>


<!-- /.intro section -->
<div id="intro">
    <div class="container">
        <div class="row">
            <!-- /.intro image -->
            <div class="col-md-6 intro-pic wow slideInLeft">
                <img src="{{ asset('images/taxi_man.png')}}" alt="image" class="img-responsive">
            </div>

            <!-- /.intro content -->
            <div class="col-md-6 wow slideInRight">
                <h2>Railway station and airport transfers</h2>
                <p>
                    The <a href="#"> </a> that simplifies life:
                <ul>
                    <li><i class="fa fa-check color"> </i> A fixed price known on the reservation. </li>
                    <li><i class="fa fa-check color"> </i> A professional and discreet  <a href="#">Driver</a> .  </li>
                    <li><i class="fa fa-check color"> </i> A Time that want to go and back .    </li>
                    <li><i class="fa fa-check color"> </i> A Day that you want to go .    </li>
                </ul>
                </p>

            </div>
        </div>
    </div>
</div>

<!-- /.contact section -->
<div id="contact">
    <div class="action fullscreen parallax" style="background-image:url('images/bg.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">
        <div class="overlay">
            <div class="container">
                <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">

                    <!-- /.download title -->
                    <h2 class="wow fadeInRight">Would like to know more?</h2>
                    <p class="contact_text wow fadeInLeft">
                        If you want to know more details about us you can call as or send am email to intract with us .
                    </p>

                    <!-- /.download button -->
                    <div class="contact-cta wow fadeInLeft">
                        <ul class="contact-ul">
                            <li class="contactbutton call wow fadeInUp animated">
                                <a href="#">
                                    <i class="pe-7s-call"></i>
                                    <p><small>phone Call</small><br>+249929571361</p>
                                </a>
                            </li>
                            <li class="contactbutton email wow fadeInUp animated" data-wow-delay="0.2s">
                                <a href="#">
                                    <i class="pe-7s-mail"></i>
                                    <p><small>Send us Email</small><br>Tarhily@gmail.com</p>
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
<div id="testi">
    <div class="container">
        <div class="text-center">
            <h2 class="wow fadeInLeft">Programer</h2>
            <div class="title-line wow fadeInRight"></div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div id="owl-testi" class="owl-carousel owl-theme wow fadeInUp">

                    <!-- /.testimonial 1 -->
                    <div class="testi-item">
                        <div class="client-pic text-center">

                            <!-- /.client photo -->
                            <img src="{{ asset('images/icon.png')}}" alt="client">
                        </div>
                        <div class="box">

                            <!-- /.testimonial content -->
                            <p class="message text-center">"
                                The desiner for this page</p>
                        </div>
                        <div class="client-info text-center">

                            <!-- /.client name -->
                            Hamza Sufian, <span class="company">Disegn</span>
                        </div>
                    </div>

                    <!-- /.testimonial 2 -->
                    <div class="testi-item">
                        <div class="client-pic text-center">

                            <!-- /.client photo -->
                            <img src="{{ asset('images/icon.png')}}" alt="client">
                        </div>
                        <div class="box">

                            <!-- /.testimonial content -->
                            <p class="message text-center">The Tester for this website</p>
                        </div>
                        <div class="client-info text-center">

                            <!-- /.client name -->
                            Rawan Isamil, <span class="company">Tester</span>
                        </div>
                    </div>

                    <!-- /.testimonial 3 -->
                    <div class="testi-item">
                        <div class="client-pic text-center">

                            <!-- /.client photo -->
                            <img src="{{ asset('images/icon.png')}}" alt="client">
                        </div>
                        <div class="box">

                            <!-- /.testimonial content -->
                            <p class="message text-center">"
                                The programer For this website</p>
                        </div>
                        <div class="client-info text-center">

                            <!-- /.client name -->
                            Amasy Osman, <span class="company">Programer</span>
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