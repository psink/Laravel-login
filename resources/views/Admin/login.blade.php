{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<!-- Required meta tags -->--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--<!-- Bootstrap CSS -->--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}

{{--<title>Hello, world!</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--<form action={{route('userLogin')}} method="post">--}}
{{--{!! csrf_field() !!}--}}
{{--<div class="text-danger">--}}
{{--{{Session::get('message')}}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label for="exampleInputEmail1">Email</label>--}}
{{--<input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter Email">--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label for="exampleInputPassword1">Password</label>--}}
{{--<input type="password" class="form-control" name="password" placeholder="Enter Password">--}}
{{--</div>--}}
{{--<button type="submit" class="btn btn-primary">Register</button>--}}
{{--</form>--}}

{{--</div>--}}

{{--<!-- Optional JavaScript -->--}}
{{--<!-- jQuery first, then Popper.js, then Bootstrap JS -->--}}
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}

        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{URL::to('Front/Login/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('Front/Login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('Front/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('Front/Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('Front/Login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('Front/Login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('Front/Login/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('Front/Login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('Front/Login/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('Front/Login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('Front/Login/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action={{route('adminLogin')}} method="post">
					<span class="login100-form-title p-b-43">
						Admin Login
					</span>

                {{csrf_field()}}
                <div class="text-danger">
                    {{Session::get('message')}}
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt1">
                            Forgot Password?
                        </a>
                    </div>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>

            <div class="login100-more">
                <img src="http://localhost:8000/Front/Login/images/bg-01.jpg" alt="" style="width: 102%; height: -webkit-fill-available;">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src="{{URL::to('Front/Login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::to('Front/Login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::to('Front/Login/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{URL::to('Front/Login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::to('Front/Login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::to('Front/Login/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{URL::to('Front/Login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::to('Front/Login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::to('Front/Login/js/main.js')}}"></script>


</body>
</html>