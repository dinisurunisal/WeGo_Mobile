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

	</head>
	
	<style>
		#sign_up{
			background-image: url('images/signupBackground.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 376px;
		}
		.sign_up .form_div{
			height: 500px;
			width: 300px;
			margin-top: 15%;
			margin-left: 10%;
		}
		.sign_up .ui-page-theme-a .ui-body-inherit{
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
		.sign_up A {text-decoration: none;} 
		.sign_up .anchor_button{
			height: 26px;
			width: 58px;
			margin-top: 10%;
			margin-left: 5%;
			margin-bottom: 10%;
		}
		.sign_up .anchor_h4{
			font-family: Noto Sans;
			font-size: 15px; 
			font-weight: 500;
			color: white;
			margin-top: 10%; 
			margin-bottom: 20%;
			margin-left: 5%;
			text-align: left;
		}
		.sign_up .wrapper_sign {
			margin-top:15%;
			text-align: center;
		}
		.sign_up #buttons_sign{
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
		.sign_up .label_form{
			font-family: Noto Sans; 
			font-size: 15px; 
			font-weight: 500;
			color:white;
		}
		.sign_up h1{
			text-align: center;
			font-family: Noto Sans; 
			font-weight: 900; 
			font-size: 30px; 
			line-height: 28px; 
			letter-spacing: 0.01em; 
			color: #ffffff;
		}
		.sign_up p{
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
		<div data-role="page" id="sign_up" class="sign_up">
			<div role="main">
				<a href="login.php" data-transition="slide" data-ajax="false" id="flat-btn" >
					<!--<h4 class="anchorH4">Back</h4>-->
					<img src="images/icons/backButtonWhite.png" class="anchor_button"/>
                </a>
				<h1>
					Create Account
				</h1>
				<p>
					Create a new account
				</p>
				<div class="form_div">				
                        <form id="form" onsubmit="event.preventDefault(); login()">
                            <label class="label_form" for="contactNumber"> Name </label>
                            <input required type="number" name="contactNumber" id="contactNumberForm" class="form_field" />
							
							<label class="label_form" for="contactNumber"> Contact Number </label>
                            <input required type="number" name="contactNumber" id="contactNumberForm" class="form_field" />
								
                            <label class="label_form" for="contactNumber"> Password </label>
                            <input required type="number" name="contactNumber" id="contactNumberForm" class="form_field" />
							
							<label class="label_form" for="contactNumber"> Confirm Password </label>
                            <input required type="number" name="contactNumber" id="contactNumberForm" class="form_field" />
                           
							<div class="wrapper_sign">
								<button type="submit" class="buttons_sign" id="buttons_sign" data-role="button">Sign Up</button>
							</div>
							
                        </form>
                   </div>
			</div>


		</div>
	</body>
</html>