

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title> {{ __('Verification Email') }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="logo.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front-login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front-login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front-login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('front-login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front-login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front-login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('front-login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front-login/css/util.css')}}">
    @if (app()->getLocale()=="en")
	<link rel="stylesheet" type="text/css" href="{{asset('front-login/css/main.css')}}">
    @else
	<link rel="stylesheet" type="text/css" href="{{asset('front-login/css/main-ar.css')}}">
    @endif

<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		
		<div class="container-login100" style="background-image: url('front-login/images/bg-01.jpg');">
			<div class="language-selector">
				<a href="{{url('setlocale/ar')}}">AR</a>|<a href="{{url('setlocale/en')}}">EN</a>
			</div>

			<div class="wrap-login100">
	
					<span class="login100-form-logo">
						<img src="front-login/images/logo.jpg" alt="">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
                    {{ __('menu.Verification Email') }}
					</span>
                    <div class="mb-4 text-sm text-gray-600">
        {{ __('menu.Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('menu.A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif


		

           
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="container-login100-form-btn">
                <button class="login100-form-btn" >
                {{ __('menu.Resend Verification Email') }}
                </button>
                </div>
            </form>
            <br>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="container-login100-form-btn">
                <button class="login100-form-btn" >
                    {{ __('menu.Log Out') }}
                </button>
                </div>
            </form>
					
				
              
       

			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('front-login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('front-login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('front-login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('front-login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('front-login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('front-login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('front-login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('front-login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('front-login/js/main.js')}}"></script>

</body>
</html>

