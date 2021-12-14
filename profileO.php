<!DOCTYPE html>
<html>
	<head>
		<!-- Common -->
		<meta charset="utf-8">
		<title>Destination</title>
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
				margin-top:70px;
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
				position: relative;
				margin-left:auto;
				margin-right:auto;
				margin-top:auto;
				margin-bottom:auto;
				display:block;
			}
			.edit_logout_bar{
				background-color:#0099e6;
				width:100%;
				padding: 5px 5px 5px 5px;
			}
			#flex_container{
				display: flex;
			}
			#flex_child{
				flex:1;
			}
		</style>

				<!-- top:120px;
				left:150px; -->

	</head>

	<body>
		<div data-role="page" id="profile_page">
			<!-- Header -->
			<?php include("header.php"); ?>

			<div role="main" class="ui-content">
				<div class="top_banner">
					<img id="background" src="images/profile_page/background.jpg" alt="">
					<img id="profile" src="images/profile_page/profile_image.jpeg" alt="">
				</div>
			</div>

			<div class="edit_logout_bar" id="flex_container">
				<div class="edit_profile_btn" id="flex_child" style="padding-left:10px;">
					EDIT
				</div>
				<div class="logout_btn" id="flex_child" style="text-align: right; padding-right:10px;">
					LOGOUT
				</div>
			</div>

			<?php include("footer.php"); ?>
			<?php include("navigation_bar.php"); ?>
		</div>
	</body>
</html>