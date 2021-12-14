<!DOCTYPE html>
<html>
	<head>
		<!-- Common -->
		<meta charset="utf-8">
		<title>Profile Page</title>
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
		<script src="js/destination.js"></script>

		<style>
			#profile_page{
				position: relative;
			}
			/* #uiContent{
				position: relative;
			} */
			.editLogout_bar{
				background-color:;
			}
			#flex_container{
				display: flex;
				background-color: light blue;
			}
			#flex_child{
				flex: 1;
			}
			.user_details{
				text-align: left;
				align-content: center;
			}
			.table{
				margin-left: auto;
 			    margin-right: auto;
				border:1px solid black;
			}
			.background_image{
				position: relative;
			}
			.profile_image{
				position: absolute;
				height:25px;
				width:25px;
			}
			#image{
				height:25px;
				width:25px;
				object-fit: contain;
			}

		</style>

	</head>

	<body>
		<div data-role="page" id="profile_page">
			<!-- Header -->
			<div>
			<?php include("header.php"); ?>
			</div>

			<div data-role="main" class="ui-content" id="uiContent">
			
				<!-- backgroung image banner -->
				<div class="background_image" style="margin: 65px -16px -16px -16px;">
					<img src="images/profile_page/background.jpg">
					<img id="image" src="images/profile_page/profile_image.jpeg">
				</div>

				<!-- <div class="profile_image">
					<img id="image" src="images/profile_page/profile_image.jpeg" alt="">
				</div> -->
				<!--  -->
				<div class="editLogout_bar" id="flex_container" style="border-width:2px; border-color:black; margin-left:-16px;">
				 	<div class="edit_profile_btn" id="flex_child">
						 <p>edit profile</p>
					 </div>
					 <div class="logout_btn" id="flex_child" >
						 <p style="text-align: right;" >logout</p>
					 </div>
				</div>

				<div class="user_details">
					<table class="table">
						<tr>
							<td>first name</td>
							<td>john watson</td>

						</tr>
						<tr>
							<td>member since</td>
							<td>2018</td>
						</tr>
						<tr>
							<td>contant no</td>
							<td>0984477589</td>
						</tr>
						<tr>
						<td>Email</td>
						<td>sample@email.com</td>
						</tr>
					</table>
				</div>

				<div class="favourite_list_btn">

				</div>
				<div class="send_feedback_btn">

			
				

			

			</div>

			<?php include("footer.php"); ?>
			<?php include("navigation_bar.php"); ?>
		</div>
	</body>
</html>