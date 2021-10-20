@extends('layouts.app')

@section('content')
    <style>
        body {
            background: #ccc;
            color: #fff;  
            background: url('../image/busBack.jpg') center/cover;          
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
    <div class="login-overlay"></div>
    <div id="login" >        
        <br>
        <div class="container">            
                <div class="card">
                    <h4 class="text-center text-black card-header">تسجيل الدخول</h4>
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="row mr-2 ml-2">
                                <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                                        id="type-error">{{Session::get('error')}}
                                </button>
                            </div>
                        @endif

                        <form id="login-form" class="form"  method="POST" action="{{ route('login') }}">
                            @csrf                            
                            <div class="form-group">
                                <label for="username" class="text-black">البريد الالكتروني</label><br>
                                <input type="text" name="email" id="username" class="form-control">
                            @error('email')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-black">كلمة السر</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn text-black btn-primary btn-block" value="دخول">
                            </div>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
    </div>
@endsection