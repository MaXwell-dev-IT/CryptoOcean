

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ __('menu.Login') }}</title>
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
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
        @csrf

					<span class="login100-form-logo">
						<img src="front-login/images/logo.jpg" alt="">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
                    {{ __('menu.LOG IN') }}
					@if(session('status'))
                       <h6 class="alert alert-danger text-center"> {{session('status')}}</h6>
                    @endif
					</span>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color:red; margin-bottom:1rem;"  />
					<div class="wrap-input100 validate-input" data-validate = "{{ __('menu.Enter Email') }}">
						<input class="input100" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
						<span class="focus-input100" data-placeholder="&#xf200;"></span>

					</div>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="color:red; margin-bottom:1rem;"  />

					<div class="wrap-input100 validate-input" data-validate="{{ __('menu.Enter Password') }}">
						<input class="input100" type="password"  
                            name="password"
                            required autocomplete="current-password" />
						<span class="focus-input100" data-placeholder="&#xf191;"></span>

					</div>


					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
						<label class="label-checkbox100" for="ckb1">
						{{ __('menu.Remember me') }}
							
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
								{{ __('menu.Login') }}

						</button>
					</div>
             
					
					<div class="text-center p-t-90">
						<a class="txt1" href="{{ route('register') }}">
						{{ __('menu.Create account?') }}

						</a>
					</div>
              
            <!-- @if (Route::has('password.request'))
					<div class="text-center p-t-90">
						<a class="txt1" href="{{ route('password.request') }}">
						{{ __('menu.Forgot Password?') }}

						</a>
					</div>
                    @endif -->
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
