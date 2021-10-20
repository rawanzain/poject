<div id="menu">
    <nav class="navbar-wrapper navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                <ul class="nav navbar-nav">



                    @if(Auth::guest())

                        <li class="ymm-sw">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200" href="#">تسجيل<b class="caret"></b> </a>
                            <ul class="dropdown-menu navbar-nav">
                                <li><a href="{{route('login')}}">تسجيل الدخول</a></li>
                                <li><a href="{{route('register')}}">انشاء حساب جديد</a></li>
                            </ul>
                        </li>


                    @else
                        <li><a href="{{route('logout')}}">تسجيل الخروج</a></li>

                        @if(Auth::user()->hasRole('driver') && Auth::user()->confirm==1)
                            <li><a href="{{route('profile-driver.show',Auth::user()->driver->id)}}">الحساب</a></li>
                        @endif

                        @if(Auth::user()->hasRole('student') && Auth::user()->confirm==1)
                                <li><a href="{{route('profile-student.show',Auth::user()->student->id)}}">الحساب</a></li>
                        @endif



                    @endif




                        <!-- <li><a href="{{route('about-us')}}"> من نحن</a></li> -->
                        <li><a href="/#design"> من نحن</a></li>
                        <li><a href="{{route('contact')}}">تواصل معانا</a></li>
                        <li><a href="{{route('service')}}">العروض </a></li>

                        <li><a href="{{route('welcome')}}">الرئيسة</a></li>
                        <li><a href="{{route('welcome')}}"><img src="image/logo.png" width="40px" alt=""></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>














