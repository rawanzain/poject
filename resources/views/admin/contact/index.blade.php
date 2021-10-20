@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> الرسائل </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">الرسائل والاقتراحات
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جميع الرسائل </h4>
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
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <tr>
                                                <th>الاسم</th>
                                                <th> العنوان</th>

                                                <th> الموضوع </th>

                                                <th>الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($contacts)
                                                @foreach($contacts as $contact)
                                                    <tr>

                                                        <td>{{$contact -> firstname}}</td>
                                                        <td>{{$contact ->subject }}</td>
                                                        <td>{{$contact -> message}}</td>















                                                                                                               <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="#"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">رد</a>


                                                                <form action="{{route('contact.admin.destroy',$contact->id)}}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit"
                                                                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
                                                                           data-toggle="modal"
                                                                           data-target="#rotateInUpRight"
                                                                           VALUE="حذف">

                                                                </form>




                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
