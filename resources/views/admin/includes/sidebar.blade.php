<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" >

            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>



            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> المحليات </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\State::count()}}</span>
                </a>
                <ul class="menu-content">
                   <li><a class="menu-item" href="{{route('state.index')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('state.create')}}" data-i18n="nav.dash.crypto">أضافة
                            محلية جديدة </a>
                    </li>
                </ul>
            </li>





            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> المناطق </span>
                    <span
                            class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\City::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('city.index')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('city.create')}}" data-i18n="nav.dash.crypto">أضافة
                            منطقة جديدة </a>
                    </li>
                </ul>
            </li>




            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الكليات </span>
                    <span
                            class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\Collage::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li>                    <a class="menu-item" href="{{route('collage.index')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('collage.create')}}" data-i18n="nav.dash.crypto">أضافة
                            كلية جديدة </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> ترحيل </span>
                    <span
                            class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\Bus::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li> <a class="menu-item" href="{{route('bus.index')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('bus.create')}}" data-i18n="nav.dash.crypto">أضافة
                            ترجيل جديد </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الطلاب </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\Student::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('student-a.index')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> السائقين </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\Driver::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('driver-a.index')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                </ul>
            </li>




            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الشكاوي </span>
                    <span
                            class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\Complaint::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('complaint.index')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                                    </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الاقتراحات والرسائل </span>
                    <span
                            class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\Contact::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin-contact')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الضبط </span>
                    <span
                            class="badge badge badge-danger badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('user.show' , Auth::id())}}"
                                          data-i18n="nav.dash.ecommerce"> تعديل الحساب </a>
                    </li>
                    @if(Auth::user()->hasRole('superadmin'))

                    <li><a class="menu-item" href="{{route('user.create')}}"
                                          data-i18n="nav.dash.ecommerce">  اضافة حساب </a>
                    </li>
                    <li><a class="menu-item" href="{{route('user.index')}}"
                                          data-i18n="nav.dash.ecommerce">  عرض الكل </a>
                    </li>
                    @endif

                </ul>
            </li>







        </ul>
    </div>
</div>
