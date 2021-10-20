@extends('layouts.app')

@section('content')
<style type="text/css">
    body{
        position: relative;
        background: url(../image/towBuses.jpg) left/cover;
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
    .checkbox .form-group {
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
        <div class="card">
            <h4 class="card-header text-center text-black">تسجيل الطالب</h4>
            <div class="card-body">
                <form action="{{route('student.store')}}" class="text-black"  method="post">
                    @csrf()
                    <input type="hidden" value="0" name="user_id">

                    <div class="form-group">
                        <label for="name">الاسم  :</label>
                        <input class="form-control" type="text" name="name" id="name" />
                    </div>

                    <div class="form-group">القسم :</label>
                        <select class="form-control" name="department" id="">
                        <option value="">اختار القسم</option>
                            <option value="علوم حاسوب">علوم حاسوب</option>
                            <option value="هندسة برمجيات">هندسة برمجيات</option>
                            <option value="شبكات">شبكات</option>
                            <option value="تقانة معلومات">تقانة معلومات</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>

                    <div class="form-group">
                        <label for="city">المستوى :</label>
                        <select class="form-control" name="year" id="year">
                            <option value="">اختار المستوى</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
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
                            <span class="text-danger">{{ $message }} </spa n>
                            @enderror

                        </div>
                    <div class="form-group">
                        <label for="name">البداية :</label>
                        <input class="form-control" type="time" name="start" id="name" step="60"/>
                    </div>

                    <div class="form-group">
                        <label for="father_name">النهاية  :</label>
                        <input class="form-control" type="time" name="end" id="father_name" step="60"/>
                    </div>
            
                    <div class="checkbox">
                        
                        <div class="form-group">
                            <label for="">السبت</label>
                            <input  type="checkbox" name="day[]" value="السبت">
                        </div>

                        <div class="form-group">
                            <label for="">الاحد</label>
                            <input id="sun"  type="checkbox" name="day[]" value="الاحد">
                        </div>

                        <div class="form-group">
                            <label for="">الاتنين</label>
                            <input  type="checkbox" name="day[]" value="الاتنين">
                        </div>

                        <div class="form-group">
                            <label for="">الثلاثاء</label>
                            <input  type="checkbox" name="day[]" value="الثلاثاء">
                        </div>

                        
                        <div class="form-group">
                            <label for="">الاربعاء</label>
                            <input  type="checkbox" name="day[]" value="الاربعاء">
                        </div>

                        <div class="form-group">
                            <label for="">الخميس</label>
                            <input  type="checkbox" name="day[]" value="الخميس">
                        </div>

                        <div class="form-group">
                            <label for="">الجمعة</label>
                            <input  type="checkbox" name="day[]" value="الجمعة">
                        </div>
                    </div>
                    <br>    
                <input type="submit" value="حفظ" class="btn btn-primary btn-block" name="submit" id="submit" />
            
            </form>
        </div>
    </div>
</div>

<!-- JS -->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/main.js')}}"></script>

@endsection