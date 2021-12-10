<!DOCTYPE html>
<html>
	<head>
		<!-- Common -->
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		
	</head>
	<style>
		body{
			margin: 0;
			background-image: url('images/loginBackground.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 376px;
		}
		.formDiv{
			height: 500px;
			width: 300px;
			margin-top: 32%;
			margin-left: 4%;
		}
		input{
			color: white;
			min-height: 2.2em;
			text-align: left;
			border-color: white;
			border-radius: 5px;
			background: rgba(0, 0, 0, 0.2);
			padding: 0.4em;
			line-height: 1.4em;
			box-sizing: border-box;
			margin-top: 2px;
			margin-bottom: 15px;
			width: -webkit-fill-available;
		}
		A {text-decoration: none;} 
		.anchorH4{
			font-family: Noto Sans;
			font-size: 15px; 
			font-weight: 500;
			color: white;
			margin-top: 5px; 
			margin-bottom: 30px;
			text-align: right;
		}
		.wrapper {
			text-align: center;
		}
		.buttons{
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
		.labelform{
			font-family: Noto Sans; 
			font-size: 15px; 
			font-weight: 500;
			color:white;
		}
	</style>

	<body>
		<div data-role="page" id="destination_page">
			

			<div role="main">
				<div class="formDiv">
                        <form id="form" onsubmit="event.preventDefault(); login()">
                            <label class="labelform" for="contactNumber"> Phone Number </label>
                            <input required type="number" name="contactNumber" id="contactNumberForm"
                                class="formField" />
                            <label class="labelform" for="password"> Password </label>
                            <input minlength="6" required type="password" name="password" id="passwordForm"
                                class="formField" />
                            <a href="forget_password_screen.php" data-transition="slide" data-ajax="false" id="flat-btn">
                                <h4 class="anchorH4">Forgot Password?</h4>
                            </a>
							<div class="wrapper">
								<button type="submit" class="buttons" data-role="button">Login</button>
							</div>
							<a href="forget_password_screen.php" data-transition="slide" data-ajax="false" id="flat-btn">
                                <h4 class="anchorH4" style="text-align: center; margin-top: 20px; font-size: 14px;">SIGN UP FOR NEW ACCOUNT</h4>
                            </a>
                        </form>
                   </div>			
			</div>


		</div>
	</body>
</html>