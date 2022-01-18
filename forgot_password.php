<!DOCTYPE html>
<html>

<head>
	<!-- Common -->
	<meta charset="utf-8">
	<title>Forgot Password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- The three things that jQuery Mobile needs to work -->
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	<!-- custom -->
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" src="js/forget_password.js"></script>

</head>

<style>
	@media only screen and (min-device-width: 375px) and (max-device-width: 667px) {
		#forgot_password {
			background-image: url('images/signupBackground.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 376px;
		}
	}

	@media only screen and (min-device-width: 768px) and (max-device-width: 800px) {
		#forgot_password {
			background-image: url('images/signupBackground2.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 769px;
		}
	}

	@media only screen and (min-device-width: 805px) and (max-device-width: 850px) {
		#forgot_password {
			background-image: url('images/signupBackground4.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 812px;
		}
	}

	@media only screen and (min-device-width: 1024px) {
		#forgot_password {
			background-image: url('images/signupBackground3.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 1040px;
		}
	}
</style>

<body>
	<div data-role="page" id="forgot_password" class="forgot_pass">
		<div role="main" style="display: grid;">
			<a href="login.php" data-transition="slide" data-ajax="false" id="flat-btn" style="height: 10vh;">
				<img src="images/icons/backButtonWhite.png" class="anchor_button" />
			</a>
			<div style="display: grid; justify-items:center;">
				<h1>
					Forgot Password
				</h1>
				<p>
					You can reset your password here
				</p>
				<div class="form_div">
					<form id="form" onsubmit="event.preventDefault(); forget_password()">
						<label class="label_form" for="contactNumber"> Conatact Number </label>
						<input required type="number" name="contactNumber" id="contactNumberForm" class="formField" />

						<div class="wrapper_fpass">
							<button type="submit" class="buttons" id="buttons" data-role="button">Reset</button>
						</div>

					</form>
					<div id="confirmationMessage" style="margin-top:50px; visibility: hidden;">
						<h2 style="color: #ffffff;">A reset message has been sent to your phone.</h2>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>

</html>