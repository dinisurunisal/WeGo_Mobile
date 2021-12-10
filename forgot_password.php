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
		#forgotPassword{
			background-image: url('images/signupBackground.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 376px;
		}
		.formDiv{
			height: 500px;
			width: 300px;
			margin-top: 15%;
			margin-left: 10%;
		}
		.ui-page-theme-a .ui-body-inherit{
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
		A {text-decoration: none;} 
		.anchorH4{
			font-family: Noto Sans;
			font-size: 15px; 
			font-weight: 500;
			color: white;
			margin-top: 10%; 
			margin-bottom: 20%;
			margin-left: 5%;
			text-align: left;
		}
		.wrapper {
			margin-top:15%;
			text-align: center;
		}
		#buttons{
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
		.labelform{
			font-family: Noto Sans; 
			font-size: 15px; 
			font-weight: 500;
			color:white;
		}
		h1{
			text-align: center;
			font-family: Noto Sans; 
			font-weight: 900; 
			font-size: 30px; 
			line-height: 28px; 
			letter-spacing: 0.01em; 
			color: #ffffff;
		}
		p{
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
		<div data-role="page" id="forgotPassword">
			<div role="main">
				<a href="login.php" data-transition="slide" data-ajax="false" id="flat-btn">
					<h4 class="anchorH4">Back</h4>
                </a>
				<h1>
					Forgot Password
				</h1>
				<p>
					You can reset your password here
				</p>
				<div class="formDiv">				
                        <form id="form" onsubmit="event.preventDefault(); login()">
                            <label class="labelform" for="contactNumber"> Conatact Number </label>
                            <input required type="number" name="contactNumber" id="contactNumberForm" class="formField" />
                           
							<div class="wrapper">
								<button type="submit" class="buttons" id="buttons" data-role="button">Reset</button>
							</div>
							
                        </form>
                   </div>
			</div>


		</div>
	</body>
</html>