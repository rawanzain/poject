<html dir="rtl">
<head>
<link href="{{ URL::asset('front/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
   </head>

   <body dir="rtl">
   <div class="pull-center"> 
   <center><h2>
   كشف بي اسامي الطلاب
</h2></center>
   </div>
<div class="pull-center " >
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal " width="200px">
                                            <thead class="">
                                            <tr>
                                                <th style="text-align:right;">الاسم</th>
                                                   </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($bus->students as $student)
                                                    <tr>

                                                        <td>{{$student -> name}}</td>
                                            </tr>

                                                @endforeach
                                            </tbody>
                                        </table>


</div>




</body>
</html>

<script>
    window.print();
</script>