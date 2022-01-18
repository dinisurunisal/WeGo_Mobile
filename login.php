<!DOCTYPE html>
<html>

<head>
	<!-- Common -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<!-- The three things that jQuery Mobile needs to work -->
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	<!-- custom -->
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" src="js/login.js"></script>

</head>
<style>
	@media only screen and (min-device-width: 375px) and (max-device-width: 667px) {
		body {
			margin: 0;
			background-image: url('images/loginBackground.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 376px;
		}

		.login_screen .form_div {
			margin-top: 80%;
		}
	}

	@media only screen and (min-device-width: 768px) and (max-device-width: 800px) {
		body {
			margin: 0;
			background-image: url('images/loginBackground2.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 769px;
		}

		.login_screen .form_div {
			margin-top: 50%;
		}
	}

	@media only screen and (min-device-width: 805px) and (max-device-width: 850px) {
		body {
			margin: 0;
			background-image: url('images/loginBackground4.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 812px;
		}

		.login_screen .main_cls {
			justify-items: end;
		}

		.login_screen .form_div {
			margin-top: 6%;
			padding-right: 9%;
		}
	}

	@media only screen and (min-device-width: 1024px) {
		body {
			margin: 0;
			background-image: url('images/loginBackground3.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 1040px;
		}

		.login_screen .form_div {
			margin-top: 30%;
		}
	}
</style>

<body>
	<div data-role="page" id="login_screen" data-theme="d" class="login_screen">
		<div role="main" class="main_cls">
			<div class="form_div">
				<form id="form" onsubmit="event.preventDefault(); login()">
					<label class="label_form" for="contactNumber"> Contact Number </label>
					<input required type="number" name="contactNumber" id="contact_number_form" class="form_field" />
					<label class="label_form" for="password"> Password </label>
					<input minlength="6" required type="password" name="password" id="password_form" class="form_field" />
					<a href="forgot_password.php" data-transition="slide" data-ajax="false" id="flat-btn">
						<h4 class="anchor_h4">Forgot Password?</h4>
					</a>
					<div class="wrapper">
						<button type="submit" class="buttons_log" data-role="button" id="buttons_log">Login</button>
					</div>
					<a href="signup.php" data-transition="slide" data-ajax="false" id="flat-btn">
						<h4 class="anchor_h4" style="text-align: center; margin-top: 20px; font-size: 14px;">SIGN UP FOR NEW ACCOUNT</h4>
					</a>
				</form>
			</div>
			<?php include("success_popups.php"); ?>
		</div>
	</div>
</body>

</html>