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
                                <li class="breadcrumb-item"><a href="#"> السائق </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل سائق
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
                                    <h4 class="card-title" id="basic-layout-form"> تعديل سائق </h4>
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
                                        <form class="form" action="{{route('driver-a.update' , $driver->id)}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">اسم السائق</label>
                                                        <input type="text" value=" {{$driver->name}}" id="name"
                                                               class="form-control"
                                                               placeholder=" اسم السائق  "
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
                                                        <label for="projectinput1"> المودل </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  المودل   "
                                                               name="model"
                                                              value=" {{$driver->model}}"
                                                        >
                                                        @error("model")
                                                        <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> الرخضة </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  الرخضة   "
                                                               name="lience"
                                                               value=" {{$driver->lience}}"
                                                        >
                                                        @error("lience")
                                                        <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
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


                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="country">المنطقة</label>
                                                    <select class="form-control" id="city-dropdown" name="city">
                                                    </select>
                                                    @error("city")
                                                    <span class="text-danger">{{ $message }} </spa n>
                                                    @enderror

                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> اللون </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  اللون   "
                                                               name="color"
                                                               value=" {{$driver->color}}"
                                                        >
                                                        @error("color")
                                                        <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> البداية </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  اللون   "
                                                               name="color"
                                                               value=" {{$driver->start}}"
                                                        >
                                                        @error("color")
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
                                                               placeholder="  اللون   "
                                                               name="color"
                                                               value=" {{$driver->end}}"
                                                        >
                                                        @error("color")
                                                        <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> عدد الركاب</label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder=" عدد الركاب   "
                                                               name="quantity"
                                                               value=" {{$driver->quantity}}"
                                                        >
                                                        @error("name")
                                                        <span class="text-danger">{{ $message }} </spa n>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> السعر </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  السعر   "
                                                               name="price"
                                                               value=" {{$driver->price}}"

                                                        >
                                                        @error("price")
                                                        <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="shadow">مظللة</label>
                                                        <input id="shadow" type="checkbox" name="specification[]" value="مظللة">

                                                        <label for="shadow">مكيفة</label>
                                                        <input id="shadow" type="checkbox" name="specification[]" value="مكيفة">

                                                        <label for="shadow">شاشة</label>
                                                        <input id="shadow" type="checkbox" name="specification[]" value="شاشة">

                                                    </div>
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
