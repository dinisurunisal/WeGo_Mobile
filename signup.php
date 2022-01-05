<!DOCTYPE html>
<html>

<head>
	<!-- Common -->
	<meta charset="utf-8">
	<title>SignUp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- The three things that jQuery Mobile needs to work -->
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	<link rel="stylesheet" href="css/style.css" />

	<script type="text/javascript" src="js/signup.js"></script>

</head>

<style>
	#sign_up {
		background-image: url('images/signupBackground.png');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 376px;
	}

	::placeholder { 
  		color: white;
  		opacity: 0.5; 
	}
</style>

<body>
	<div data-role="page" id="sign_up" class="sign_up">
		<div role="main">
			<a href="login.php" data-transition="slide" data-ajax="false" id="flat-btn">
				<!--<h4 class="anchorH4">Back</h4>-->
				<img src="images/icons/backButtonWhite.png" class="anchor_button" />
			</a>
			<h1>
				Create Account
			</h1>
			<p>
				Create a new account
			</p>
			<div class="form_div">
				<form id="form" onsubmit="event.preventDefault(); signup()">
					<label class="label_form" for="name"> Name </label>
					<input required type="text" name="name" id="name_reg" class="form_field" placeholder="John Smith" />

					<label class="label_form" for="email"> Email </label>
					<input type="email"  pattern=".+@gmail\.com" name="email" id="email_reg" class="form_field" placeholder="example@gmail.com" />

					<label class="label_form" for="contact_number"> Contact Number </label>
					<input maxlength="10" required type="number" name="contact_number" id="contact_number_reg" class="form_field" placeholder="07xxxxxxxx" />

					<label class="label_form" for="password"> Password </label>
					<input minlength="6" required type="password" name="password" id="password_reg" class="form_field" placeholder="******" />

					<label class="label_form" for="contactNumber"> Confirm Password </label>
					<input minlength="6" required type="password" name="confirm_password" id="confirm_password_reg" class="form_field" placeholder="******" />

					<div class="wrapper_sign">
						<button type="submit" class="buttons_sign" id="buttons_sign" data-role="button">Sign Up</button>
					</div>

				</form>
			</div>
			<?php include("success_popups.php");?>
		</div>


	</div>
</body>

</html>