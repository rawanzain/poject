@extends('layouts.app ')

@section('content')
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
        #login {
            position: relative;
        }
        #login .container {
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

    </head>
    <body>
        <div class="login-overlay"></div>
        <div id="login">
            <br>
            <div class="container">              
                <div class="card">
                    <h4 class="card-header text-center text-black">انشاء حساب</h4>
                    <div class="card-body">
                    <form method="POST" class="text-black" action="{{ route('register')}}">
                @csrf
                <div class="form-group">

                    <div class="form-group">
                        <div class="row">

                    <label for="UserName">الاسم</label>
                    <input type="text" class="form-control" id="email" name="name">
                    @error('name')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                        </div>

                    </div>

                <div class="form-group">
                    <div class="row">

                    <label for="email">الايميل</label>
                    <input type="email" class="form-control" id="email" name="email">
                        @error('email')

                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                </div>

                
                <div class="form-group">
                    <div class="row">

                    <label for="email">التلفون</label>
                    <input type="text" class="form-control" id="email" name="phone">
                        @error('phone')

                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                </div>

                <div class="form-group">
                    <div class="row">

                    <label for="pwd">كلمة السر</label>
                    <input type="password" class="form-control" id="pwd" name="password">
                        @error('password')

                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                </div>

                <div class="form-group">
                    <div class="row">

                    <label for="pwd">تاكيد كلمة السر</label>
                    <input type="password" class="form-control" id="pwd" name="confirm-password">
                        @error('confirm-password')

                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="pwd">  النوع</label>

                    <select name="type" class="form-control">

                        <option  class="form-control" value="">
                            حدد النوع سائق - طالب
                        </option>

                        <option value="2" class="form-control">
                            سائق
                        </option>
                        <option value="3" class="form-control">
                            طالب
                        </option>
                    </select>
                            @error('type')

                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                    </div>
<br><br>
                <input type="submit" class="btn text-black btn-primary btn-block btn-sm" value="تسجيل" />
                </div>
            </form>
            
                    </div>
                </div>                              
            </div>
            </div>
@endsection