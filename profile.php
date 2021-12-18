<!DOCTYPE html>
<html>
	<head>
		<!-- Common -->
		<meta charset="utf-8">
		<title>Profile page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/themes/my-custom-theme.css" />
		<link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
		<link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />

		<!-- The three things that jQuery Mobile needs to work -->
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

		<!-- Custom -->
		<!-- <script src="js/destination.js"></script> -->

		<style>
			.top_banner{
				margin-top:44px;
				margin-left:-16px;
				margin-right:-16px;
				position: relative;
			}
			#background{
				height:200px;
				width:100%;
				object-fit:fill;
				position: relative;
				
			}
			#profile{
				height:70px;
				width:70px;
				object-fit:fill;
				position: absolute;

				margin:auto;
				display:block;
				border-radius: 50%;
				left: 0;
    			top: 0;
   				right: 0;
   				bottom: 0;
			}
			.edit_logout_bar{
				background-color:#0099e6;
				width:100%;
				padding: 5px 5px 5px 5px;
				margin-top:-22px;
			}
			#flex_container{
				display: flex;
			}
			#flex_child{
				flex:1;
			}
			.user_data_r1{
				text-align:center;
				display: flex;
				flex-direction: row;
			}
			.user_data_r2{
				text-align:center;
				display: flex;
				flex-direction: row;
			}
			.button_container{
				display:flex;
				justify-content: space-around;
				flex-direction:row;
			}
			.button{
				width:341px;
				height:85px;
				border-radius:12px;
				border-color:#0099e6;
				background-color:#0099e6;
				margin:10px;
				color:white;
			}
			@media (max-width: 375px) {
				.button_container{
					flex-direction: column;
				}
				.user_data_r1{

					flex-direction: column;
				}
				.user_data_r2{

					flex-direction: column;
				}

			}
			.data{
				display:flex;
				flex: 1;
			}
			.data_child{
				flex:1;
				margin: 10px;
			}
			#data_name{
				font-weight: bold;
			}
		</style>


	</head>

	<body>
		<div data-role="page" id="profile_page">
			<!-- Header -->
			<?php include("header.php"); ?>

			<!-- main banner -->
			<div role="main" class="ui-content">
				<div class="top_banner">
					<img id="background" src="images/profile_page/background.jpg" alt="">
					<img id="profile" src="images/profile_page/profile_image.jpeg" alt="">
				</div>
			</div>

			<!-- bar with edit logout buttons -->
			<div class="edit_logout_bar" id="flex_container">

				<div class="edit_profile_btn" id="flex_child" style="padding-left:10px;">
					<a onclick="alert('Hello world!')" >EDIT</a>
				</div>
				<div class="logout_btn"  id="flex_child" style="text-align: right; padding-right:10px;">
					<a onclick="alert('Hello world!')" >LOGOUT</a>
				</div>

			</div>

			<div class="user_data">
				<div class="user_data_r1">
					<div class="data">
						<div class="data_child" id="data_name">First Name</div>
						<div class="data_child">John watson</div>
					</div>
					<div class="data">
						<div class="data_child" id="data_name">member since</div>
						<div class="data_child">4th july 1998</div>
					</div>
				</div>
				<div class="user_data_r2">
					<div class="data">
						<div class="data_child" id="data_name">contanct no</div>
						<div class="data_child">5846545</div>
					</div>
					<div class="data">
						<div class="data_child" id="data_name">E-mail</div>
						<div class="data_child">sample@gmail.com</div>
					</div>
				</div>
			</div>

			<div class="button_container">
				<div><button class="button" data-role="none">Favourite List</button></div>
				<div><button class="button" data-role="none">Send Feedback</button></div>
				
				
			</div>

			<?php include("footer.php"); ?>
			<?php include("navigation_bar.php"); ?>
		</div>
	</body>
</html>