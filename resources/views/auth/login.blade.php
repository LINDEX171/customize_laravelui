<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('loginC/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="{{ asset('loginC/img/wave.png') }}">
	<div class="container">
		<div class="img">
			<img src="{{ asset('loginC/img/bg.svg') }}">
		</div>
		<div class="login-content">
			<form method="POST" action="{{ route('login') }}">
				@csrf 
				<img src="{{ asset('loginC/img/avatar.svg') }}">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="email">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	
				<button type="submit" class="btn ">
					{{ __('Login') }}
				</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('loginC/js/main.js')}}"></script>
</body>
</html>
