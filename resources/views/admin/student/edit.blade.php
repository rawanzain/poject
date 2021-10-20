@extends('layouts.admin')

@section('content')
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"> الطلاب </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل طالب
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> تعديل طالب </h4>
                                    <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('admin.includes.message')

                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{route('student-a.update' , $student->id)}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">اسم الطالب</label>
                                                        <input type="text" value="{{$student->name}}" id="name"
                                                               class="form-control"
                                                               placeholder=" اسم الطالب  "
                                                               name="name">
                                                        @error("name")
                                                        <span class="text-danger">{{ $message }} </spa n>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">القسم</label>
                                                        <select name="department" class="form-control" id="">
                                                            <option value="cs">CS</option>
                                                            <option value=sw"">SW</option>
                                                            <option value="nw">NW</option>
                                                            <option value="it">IT</option>
                                                        </select>

                                                        @error("department")
                                                        <span class="text-danger">{{ $message }} </spa n>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">القسم</label>
                                                        <select name="year" class="form-control" id="">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                        @error("year")
                                                        <span class="text-danger">{{ $message }} </spa n>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="country">المحلية</label>
                                                    <select class="form-control" id="country-dropdown" name="state">
                                                        <option value="">Select Country</option>
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->name}}">
                                                                {{$state->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="country">المنطقة</label>
                                                    <select class="form-control" id="country-dropdown" name="city">
                                                        <option value="">Select Country</option>
                                                        @foreach ($citys as $city)
                                                            <option value="{{$city->name}}">
                                                                {{$city->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> البداية </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  رقم الهاتف  "
                                                               name="start"
                                                               value="{{$student->start}}"
                                                        >
                                                        @error("start")
                                                        <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> النهاية </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  النهاية   "
                                                               name="end"
                                                               value="{{$student->end}}"
                                                        >
                                                        @error("end")
                                                        <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="client-data hide wow fadeInLeft">

                                                <!-- <form action="#" class="padding-t-50" method="post"> -->
                                                <div class="clearfix"></div>
                                                <div class="col-sm-6 col-sm-offset-2">
                                                    <div class="form-group form-inline days-container">
                                                        <label for="name-login" >
                                                            <input class="form-control my-auto" type="checkbox" name="day[]" value="Satruday"> <span class="m-2">Sunday</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group form-inline days-container">
                                                        <label for="name-login" >
                                                            <input class="form-control" type="checkbox" name="day[]" value="Monday"> <span class="m-2">Monday</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group form-inline days-container">
                                                        <label for="name-login" >
                                                            <input class="form-control" type="checkbox" name="day[]" value="Tuesday"> <span class="m-2">Tuesday</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group form-inline days-container">
                                                        <label for="name-login" >
                                                            <input class="form-control" type="checkbox" name="day[]" value="Wendesday"> <span class="m-2">Wednesday</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group form-inline days-container">
                                                        <label for="name-login" >
                                                            <input class="form-control" type="checkbox" name="day[]" value="Thursday"> <span class="m-2">Thrusday</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group form-inline days-container">
                                                        <label for="name-login" >
                                                            <input class="form-control" type="checkbox" name="day[]" value="Friday"> <span class="m-2">Friday</span>
                                                        </label>
                                                    </div>

                                                </div>


                                                <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection
