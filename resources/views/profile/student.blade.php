@extends('layouts.app')

@section('content')



<div class="container padding-t-50 padding-b-50">
    @if($student->driver_id != NULL)
        <h3>
            <span class="color" >الترحيل الخاص   </span>
        </h3>
    <form method="post" action="{{route('delete-student' , [$student->id , 1])}}">
        @csrf
        <input type="submit" class="btn btn-primary" value="الخروج من الترحيل" style="width:200px;">
        <br><br>
    </form>
  <div class="row">

  <div class="col-sm-6">


  <table style="border:none; margin-right:80px;">
      <tr>
<td style="width:20rem;">
    <h3> <span class=" wow fadeInRight"> اسم السائق</span> </h3>
</td>

<td>
<h3 class="wow fadeInRight text-capitalize">
                    <span class="" > : {{$student->driver->name}}</span>
                </h3>
</td>
</tr>

<tr>
<td style="width:20rem;">
    <h3> <span class=" wow fadeInRight">  الموديل</span> </h3>
</td>

<td>
<h3 class="wow fadeInRight text-capitalize">
                    <span class="" > : {{$student->driver->model}}</span>
                </h3>
</td>
</tr>

<tr>
<td style="width:20rem;">
    <h3> <span class=" wow fadeInRight"> رقم الهاتف</span> </h3>
</td>

<td>
<h3 class="wow fadeInRight text-capitalize">
                    <span class="" > : {{$student->driver->user->phone}}</span>
                </h3>
</td>
</tr>


<td style="width:20rem;">
    <h3> <span class=" wow fadeInRight">  البريد الالكتروني</span> </h3>
</td>

<td>
<h3 class="wow fadeInRight text-capitalize">
                    <span class="" > : {{$student->driver->user->email}}</span>
                </h3>
</td>
</tr>

<tr>
<td style="width:20rem;">
    <h3> <span class=" wow fadeInRight"> رقم الرخضة </span> </h3>
</td>

<td>
<h3 class="wow fadeInRight text-capitalize">
                    <span class="" > : {{$student->driver->lience}}</span>
                </h3>
</td>
</tr>

<tr>
<td style="width:20rem;">
    <h3> <span class=" wow fadeInRight">  التقيم</span> </h3>

</td>

<td>
            @if($student->driver->averageRating == 0)
                 <h3> <span class="wow fadeInRight" > : لم يتم تقيم السائق بعد   </span> </h3>
                      @else
                      <h3>  <span class= "wow fadeInRight" > :   {{number_format($student->driver->averageRating)}} / 5   </span> </h3>

                      @endif
      </td>
</tr>

</table>

      

      </div>


      <div class="col-sm-6">

          <img src="{{ URL::asset($student->driver->car_image)}}" width="400" height="400" style="margin-left:250px;">
      <br>

          <form action="{{route('rating' , $student->driver->id)}}" method="post">
          <h2>تقيم</h2>
          <br>
             @csrf
             <div class="form-group">

              <select name="rate" class="form-control">
                  <option value="5" class="item">ممتاز</option>
                  <option value="4">جيد جدا</option>
                  <option value="3">جيد</option>
                  <option value="2">وسط</option>
                  <option value="1">ضعيف</option>

              </select>
</div>
              <input type="submit" value="تقييم">

          </form>
      </div>


      </div>





  </div>



    <!-- <h1 class="pull-right" style="">تقييم</h1> -->




        <title>شكوى</title>

        <!-- Font special for pages-->

        <!-- Main CSS-->
        <link href="{{URL::asset('css/main1.css')}}" rel="stylesheet" media="all">
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title" style="text-align: center;">تقديم شكوى</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('complaint.store')}}">
@csrf

                        <div class="form-row">
                            <input type="hidden" value="{{$student->driver->id}}" name="driver_id">

                            <input type="hidden" value="0" name="kind">

                            <div class="name">نوع الشكوى</div>
                            <div class="value">
                                <div class="input-group">
                                    <select name="type" class="form-control input--style-6">
                                        <option value="late">  تاخير في الحضور</option>
                                        <option value="fast"> سواقة بي تهور</option>
                                        <option value="bad"> تعامل سئ</option>
                                        <option value="other"> اسباب اخرى</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">ملاحظة</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6 form-control" name="message" placeholder="ملاحظة"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="ارسال">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>





    </form>
    </div>
    </div>
    </div>
<br><BR><hr><br><br>
@endif

<div class="container padding-t-50 padding-b-50">


@if($student->bus_id != NULL)
    <h3 >
        <span class="color" >الترحيل العام   </span>
    </h3>
    <form method="post" action="{{route('delete-student' , [$student->id , 2])}}">
        @csrf

        <input type="submit" class="btn btn-primary" value="الخروج من الترحيل" style="width:200px;">
        <br><br>
    </form>

    <div class="row">



    <table style="border:none; margin-right:300px;">
      <tr>
<td style="width:40rem;">
    <h3> <span class=" wow fadeInRight"> اسم السائق</span> </h3>
</td>

<td>
<h3 class="wow fadeInRight text-capitalize">
                    <span class="" > : {{$student->bus->name}}</span>
                </h3>
</td>
</tr>

<tr>
<td style="width:30rem;">
    <h3> <span class=" wow fadeInRight">  رقم الرخضة</span> </h3>
</td>

<td>
<h3 class="wow fadeInRight text-capitalize">
                    <span class="" > : {{$student->bus->lience}}</span>
                </h3>
</td>
</tr>

</table>


        </div>



    </div>








    <!-- <h1 class="pull-right" style="">تقييم</h1> -->




    <title>شكوى</title>

    <!-- Font special for pages-->

    <!-- Main CSS-->
    <link href="{{URL::asset('css/main1.css')}}" rel="stylesheet" media="all">
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title" style="text-align: center;">تقديم شكوى</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('complaint.store')}}">
                        @csrf


                        <div class="form-row">
                            <input type="hidden" value="{{$student->bus->id}}" name="driver_id">
                          <input type="hidden" value="1" name="kind">
                          <div class="name">نوع الشكوى</div>
                            <div class="value">
                                <div class="input-group">
                                  <select name="type" class="form-control input--style-6">
                                        <option value="late">  تاخير في الحضور</option>
                                        <option value="fast"> سواقة بي تهور</option>
                                        <option value="bad"> تعامل سئ</option>
                                        <option value="other"> اسباب اخرى</option>
                                    </select>

                                </div>

                                </div>
                            </div>
                        
                        <div class="form-row">
                            <div class="name">ملاحظة</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6 form-control" name="message" placeholder="ملاحظة"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="ارسال">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>





    </form>

            @endif


@if($student->bus_id == NULL And $student->driver_id == NULL)

    <div class="container" style="margin:150px 50px 270px 20px;">
        <h2 class="wow fadeInRight text-capitalize">
            <span class="color" >    عذرا الرجاء الاشتراك في احد التراحيل العامة او الخاصة لمشاهدة تفاصيل السائق</span>
        </h2>
    </div>
    @endif



</div>
<div class="claerfix"></div>


@endsection