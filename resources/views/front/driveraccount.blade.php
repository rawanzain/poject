@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" href="{{URL::asset('css/style.css')}}"> -->
<style type="text/css">
    body{
        position: relative;
        background: url(../image/busBack.jpg) center/cover;
    }
    .login-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0,0,0,0.5);
        z-index: -1;
    }
    .card {
        box-shadow: 0 5px 10px -7px #000;
        background: #fff;            
        border-radius: .5rem;
    }
    .card-body {
        padding: 1rem 2rem;
    }
    .card-header {
        background: #fed22d;
        padding: 1.4rem;
    }
    .login {
        position: relative;
    }
    .main .container {
        width: 70%;
    }
    .text-black {
        color: #222;
    }
    .btn-primary {
            margin: 0
        }
    .btn-primary:hover {
        background: #222;
        color: #fed22d;
    }
    .checkbox  {
        display: flex;
        justify-content: space-evenly;
    }
    .checkbox .form-control {
        display: flex;
    }
    input {
        height: 0;
    }
    @media screen and (max-width: 700px) {
        #login .container {
            width: 98%
        }
    }
    @media screen and (max-width: 400px) {
        .btn-primary {
            margin: 0
        }
    }
</style>
<div class="login-overlay"></div>
<div class="main">
    <div class="container">
            <!-- <div class="signup-content">
            <div class="signup-img">
                <img src="{{URL::asset('image/signup-img.jpg')}}" alt="" height="100">
            </div> -->
            <div class="card">
                <h4 class="card-header text-center text-black">تسجيل السائق</h4>
                <div class="card-body">
                <form action="{{route('driver.store')}}" class="text-black"  method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="">
                        <div class="form-group">
                            <label for="name">الاسم رباعي :</label>
                            <input type="text" class="form-control" name="name" id="name" />       
                            @error("name")
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="father_name">رقم الرخضة :</label>
                            <input type="text" class="form-control" name="lience" id="father_name" />
                            @error("lience")
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">الموديل :</label>
                            <input type="text" class="form-control" name="model" id="name" />
                            @error("model")
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="father_name">لون السيارة :</label>
                            <input type="text" class="form-control" name="color" id="father_name" />
                            @error("color")
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="address">عدد الركاب :</label>
                        <input type="number" class="form-control" name="quantity" id="address" />
                        @error("quantity")
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

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




                    <div class="form-group">
                        <label for="country">المنطقة</label>
                        <select class="form-control" id="city-dropdown" name="city">
                        </select>
                        @error("state")
                        <span class="text-danger">{{ $message }} </span>
                        @enderror

                    </div>


                    <div class="form-group">
                        <label for="country">اماكن</label>
                        <input type="text" class="form-control" name="place" id="father_name" />
                        @error("place")
                        <span class="text-danger">{{ $message }} </span>
                        @enderror

                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">البداية :</label>
                            <input type="time" class="form-control" name="start" id="name" step="60">
                            @error("start")
                        <span class="text-danger">{{ $message }} </span>
                        @enderror

                       </div>

                        <div class="form-group">
                            <label for="father_name">النهاية  :</label>
                            <input type="time" class="form-control" name="end" id="father_name" step="60"/>
                            @error("end")
                        <span class="text-danger">{{ $message }} </span>
                        @enderror

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="birth_date">السعر :</label>
                        <input type="text" class="form-control" name="price" id="birth_date">
                        @error("price")
                        <span class="text-danger">{{ $message }} </span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="birth_date">صورة السيارة :</label>
                        <input type="file" class="form-control" name="car_image" id="birth_date">
                        @error("car_image")
                        <span class="text-danger">{{ $message }} </span>
                        @enderror

                    </div>

                    <div class="checkbox">
                        <div class="form-group">
                            <label for="air">مكيفة</label>
                            <input id="air" type="checkbox" name="specification[]" value="مكيفة">
                        </div>

                        <div class="form-group">
                            <label for="shadow">مظللة</label>
                            <input id="shadow" type="checkbox" name="specification[]" value="مظللة">
                        </div>

                        <div class="form-group">
                            <label for="monitor">شاشة</label>
                            <input  type="checkbox" id="monitor" name="specification[]" value="شاشة">
                        </div>

                    </div>

                    <div class="form-submit">
                        <input type="submit" value="حفظ" class="btn btn-primary btn-block" name="submit" id="submit" />
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

</div>





    <!-- JS -->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
@endsection