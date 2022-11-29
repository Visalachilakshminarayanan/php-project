<!DOCTYPE html>
<html lang="en">
<head>
	<title>GVM Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="https://fontawesome.com/v4/icon/facebook-square"> -->
	<link rel="stylesheet" href="{{url('css/log.css')}}"/>
	</head>
<body> 
	
<div class="container" id="container">
	<div class="form-container sign-up-container">
		
		<form action="{{ url('login_page') }}" method="POST">
			{{csrf_field()}}
		<!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"-->
			<!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> -->
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook-square"></i></a>
				<a href="#" class="social"><i class="fa fa-google-plus-square"></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin-square"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="user"/>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="pwd"/>
			<button type="submit" value="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="{{ url('check_update') }}" id="frmignin">
		{{csrf_field()}}
			<h1>Sign in</h1>
			<div class="social-container">
			<a href="#" class="social"><i class="fa fa-facebook-square"></i></a>
				<a href="#" class="social"><i class="fa fa-google-plus-square"></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin-square"></i></a>
			</div>
			
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email-signin"/>
			<input type="password" placeholder="Password" name="pwd-signin"/>
			
			<a href="#">Forgot your password?</a>
			<button id="signin-btn-frm">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>



<script src="{{url('js/login.js')}}"></script>



</body>
</html>