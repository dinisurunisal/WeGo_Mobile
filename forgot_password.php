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

	<link rel="stylesheet" href="css/style.css" />

</head>

<style>
	#forgot_password {
		background-image: url('images/signupBackground.png');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 376px;
	}
</style>

<body>
	<div data-role="page" id="forgot_password" class="forgot_pass">
		<div role="main">
			<a href="login.php" data-transition="slide" data-ajax="false" id="flat-btn">
				<!--<h4 class="anchor_h4">Back</h4>-->
				<img src="images/icons/backButtonWhite.png" class="anchor_button" />
			</a>
			<h1>
				Forgot Password
			</h1>
			<p>
				You can reset your password here
			</p>
			<div class="form_div">
				<form id="form" onsubmit="event.preventDefault(); login()">
					<label class="label_form" for="contactNumber"> Conatact Number </label>
					<input required type="number" name="contactNumber" id="contactNumberForm" class="formField" />

					<div class="wrapper_fpass">
						<button type="submit" class="buttons" id="buttons" data-role="button">Reset</button>
					</div>

				</form>
			</div>
		</div>


	</div>
</body>

</html>