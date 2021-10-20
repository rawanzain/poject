
@extends('layouts.app')

@section('content')
    <nav class="bg-dark navbar-dark">
        <div class="container">
        </div>
    </nav>
    <section id="header" class="jumbotron text-center">
        <h1 class="display-3">العروض</h1>
        <p class="lead">يمكن الاشتراك في ترحيل الجامعة وسوف نجد لك انسب ترحيل.</p>


    </section>

    <div class="row">
      @if(isset($bus))
        

      <table style="border:none; margin-right:300px;">
      <tr>
<td style="width:50rem;">
    <h3> <span class="color wow fadeInRight"> اسم السائق</span> </h3>
</td>

<td>
<h3 class="wow fadeInRight text-capitalize">
                    <span class="color" > {{$bus->name}}</span>
                </h3>
</td>

</tr>

<tr>
<td style="width:50rem;">
    <h3> <span class="color wow fadeInRight">رقم الرخضة</span> </h3>
</td>

<td>
<h3 class="wow fadeInRight text-capitalize">
                    <span class="color" > {{$bus->lience}}</span>
                </h3>
</td>

</tr>


<tr>
<td style="width:50rem;">
    <h3> <span class="color wow fadeInRight"> السعر</span> </h3>
</td>

<td>
<h3 class="wow fadeInRight text-capitalize">
                    <span class="color" > {{$bus->price}}</span>
                </h3>
</td>

</tr>


</table>
<br><br>

            <form action="{{route('trys' , Auth::user()->student->id)}}" method="post">
                @csrf
                <center>  <input type="submit" value="اشتراك" class="pull-center"> </center>
            </form>

        </div>
@else

            <div class="container" style="margin:150px 50px 270px 20px;">
                <h2 class="wow fadeInRight text-capitalize">
                    <span class="color" >    لا يوجد حاليا </span>
                </h2>
            </div>
          @endif


    </div>


    @endsection












