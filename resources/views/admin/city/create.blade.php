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
                                <li class="breadcrumb-item"><a href="#"> المناطق </a>
                                </li>
                                <li class="breadcrumb-item active">إضافة منطقة
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
                                    <h4 class="card-title" id="basic-layout-form"> إضافة منطقة </h4>
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
                                        <form class="form" action="{{route('city.store')}}" method="POST"
                                              enctype="multipart/form-data">

                                          @csrf
                                            <div class="row">
                                                <div class="col-md-6">

                                                <div class="form-group">
                                                <label for="country">المحلية</label>
                                                <select class="form-control" id="country-dropdown" name="state_id">
                                                    <option value="">اختار المحلية </option>
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->name}}">
                                                            {{$state->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                    @error("state_id")
                                                    <span class="text-danger">{{ $message }} </span>
                                                    @enderror

                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">اسم المنطقة</label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder=" اسم المنطقة  "
                                                                   name="name">
                                                          @error("name")
                                                            <span class="text-danger">{{ $message }} </span>
                                                        @enderror
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
