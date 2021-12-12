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

		<script type="text/javascript" src="js/login.js"></script>
		
	</head>
	<style>
		body{
			margin: 0;
			background-image: url('images/loginBackground.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 376px;
		}
		.login_screen .form_div{
			height: 500px;
			width: 300px;
			margin-top: 80%;
			margin-left: 10%;
		}
		.login_screen .ui-input-text{
			color: white;
			min-height: 2.2em;
			text-align: left;
			border-width: 1px;
			border-style: solid;
			border-color: white;
			border-radius: 5px;
			background: rgba(0, 0, 0, 0.2);
			line-height: 1.4em;
			box-sizing: border-box;
			margin-top: 2px;
			margin-bottom: 15px;
			width: -webkit-fill-available;
		}
		.login_screen A {text-decoration: none;} 
		.login_screen .anchor_h4{
			font-family: Noto Sans;
			font-size: 15px; 
			font-weight: 500;
			color: white;
			margin-top: 5px; 
			margin-bottom: 30px;
			text-align: right;
		}
		.login_screen .wrapper_log {
			text-align: center;
		}
		.login_screen #buttons_log {
			margin-left: auto;
			margin-right: auto;
			height:41px; 
			width:215px; 
			font-family: Noto Sans; 
			font-size: 15px; 
			font-weight: 900;
			font-color:white; 
			border-radius:45px; 
			color:#0174CF; 
			background-color:white; 
			border:none;
		}
		.login_screen .label_form{
			font-family: Noto Sans; 
			font-size: 15px; 
			font-weight: 500;
			color:white;
		}
	</style>

	<body>
		<div data-role="page" id="login_screen" data-theme="d" class="login_screen">
			<div role="main">
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
			</div>
		</div>
	</body>
</html>