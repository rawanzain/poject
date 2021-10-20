@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">الشكاوي </a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#"> رد على الشكوى </a>
                                </li>
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
                                    <h4 class="card-title" id="basic-layout-form">  رد على الشكوى </h4>
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
                                        <form class="form" action="{{route('sendreplay')}}" method="POST"
                                              >
                                            @csrf



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">الايميل</label>
                                                        @if(isset($driver))
                                                            <input type="text" value="{{$driver->user->email}}" class="form-control" name="email">
<input type="hidden" name="driver_id" value="{{$driver->id}}">
                                                        @endif
                                                        @if(isset($bus))
                                                            <input type="text" value="bus@bus.com" class="form-control" name="email">
 <input type="hidden" name="bus_id" value="{{$bus->id}}">

                                                        @endif


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" >
                                                    <div class="form-group">
                                                        <label for="projectinput1"> الرسالة </label>
                                                        <textarea id="name"
                                                               class="form-control"
                                                               placeholder=""
                                                               name="message">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> ارسال
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



