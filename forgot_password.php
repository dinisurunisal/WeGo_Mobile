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

</head>

<style>
	#forgot_password {
		background-image: url('images/signupBackground.png');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 376px;
	}

	.forgot_pass .form_div {
		height: 500px;
		width: 300px;
		margin-top: 15%;
		margin-left: 10%;
	}

	.forgot_pass .ui-input-text {
		color: white;
		min-height: 2.2em;
		text-align: left;
		border-color: white;
		border-radius: 5px;
		background: rgba(0, 0, 0, 0.2);
		line-height: 1.4em;
		box-sizing: border-box;
		margin-top: 2px;
		margin-bottom: 15px;
		width: -webkit-fill-available;
	}

	.forgot_pass A {
		text-decoration: none;
	}

	.forgot_pass .anchor_button {
		height: 26px;
		width: 58px;
		margin-top: 10%;
		margin-left: 5%;
		margin-bottom: 10%;
	}

	.forgot_pass .anchor_h4 {
		font-family: Noto Sans;
		font-size: 15px;
		font-weight: 500;
		color: white;
		margin-top: 10%;
		margin-bottom: 20%;
		margin-left: 5%;
		text-align: left;
	}

	.forgot_pass .wrapper_fpass {
		margin-top: 15%;
		text-align: center;
	}

	.forgot_pass #buttons {
		margin-left: auto;
		margin-right: auto;
		height: 41px;
		width: 215px;
		font-family: Noto Sans;
		font-size: 15px;
		font-weight: 900;
		font-color: white;
		border-radius: 45px;
		color: #0174CF;
		background-color: white;
		border: none;
	}

	.forgot_pass .label_form {
		font-family: Noto Sans;
		font-size: 15px;
		font-weight: 500;
		color: white;
	}

	.forgot_pass h1 {
		text-align: center;
		font-family: Noto Sans;
		font-weight: 900;
		font-size: 30px;
		line-height: 28px;
		letter-spacing: 0.01em;
		color: #ffffff;
	}

	.forgot_pass p {
		text-align: center;
		font-family: Noto Sans;
		font-weight: normal;
		font-size: 17px;
		line-height: 0;
		letter-spacing: 0.01em;
		color: #ffffff;
	}
</style>

<body>
	<div data-role="page" id="forgot_password" class="forgot_pass">
		<div role="main">
			<a href="login.php" data-transition="slide" data-ajax="false" id="flat-btn">
				<!--<h4 class="anchor_h4">Back</h4>-->
				<img src="images/icons/backButtonWhite.png" class="anchor_button"/>
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