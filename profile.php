<!DOCTYPE html>
<html>
	<head>
		<!-- Common -->
		<meta charset="utf-8">
		<title>Profile page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> -->
		<!-- <link rel="stylesheet" href="css/themes/my-custom-theme.css" /> -->
		<link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
		<link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />

		<!-- The three things that jQuery Mobile needs to work -->
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

		<!-- Custom -->
		<!-- <script src="js/destination.js"></script> -->

		
		<link rel="stylesheet" href="css/profile.css">



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
					<a onclick="showProfileMethod();" >EDIT</a>
				</div>
				<div class="logout_btn"  id="flex_child" style="text-align: right; padding-right:15px;">
					<a onclick="alert('Hello world!')" >LOGOUT</a>
				</div>

			</div>

			<div class="user_data" style="margin: 20px 0px 20px 0px;">
				<div class="user_data_r1">
					<div class="data">
						<div class="data_child" id="data_name">First Name</div>
						<div class="data_child" id="username_field">John watson</div>
					</div>
					<div class="data">
						<div class="data_child" id="data_name">Member Since</div>
						<div class="data_child" id="member_since_field">4th july 1998</div>
					</div>
				</div>
				<div class="user_data_r2">
					<div class="data">
						<div class="data_child" id="data_name">Contact No.</div>
						<div class="data_child" id="contant_number_field">5846545</div>
					</div>
					<div class="data">
						<div class="data_child" id="data_name">E-mail</div>
						<div class="data_child" id="email_field">sample@gmail.com</div>
					</div>
				</div>
			</div>

			<div class="button_container">
				<div class="center">
					<button class="button" data-role="none" onclick="location.href='favourites.php'" >
						<span class="button_icon">
						<ion-icon name="heart-outline" size="large"></ion-icon>
						</span>
						<span class="button_text" style="position:relative; top: -11px;">
							Favourite List
						</span>
					</button>
				</div>
				<div class="center">
					<button class="button" data-role="none" onclick="showFeedbackPopup();" data-ajax="false">
						<span class="button_icon">
						<ion-icon name="chatbox-outline" size="large"></ion-icon>
						</span>
						<span class="button_text" style="position:relative; top: -11px;">
							Send Feedback
						</span>
					</button>
				</div>	
			</div>

			<div data-role="popup" data-position-to="window" data-transition="pop" class="popup" style="padding: 20px;"
            id="feedbackPopup">
            <form id="formProfile" onsubmit="event.preventDefault(); sendFeedback()">
                <h3 class="heading-three" style="text-align:center;">Give Us your Feedback</h3>
                <label class="labelform grey heading-five" for="feedbackForm"> Feedback</label>
                <input type="text" required name="name" id="feedbackForm" class="formField" />

					<div class="popup_btn_container" style="display:flex; justify-content:space-evenly;">
						<button id="cancelBtn" onclick="closeFeedbackPopup();"  class="button_popup" data-role="none">Cancel</button>
						<button id="sendBtn" type="submit" class="button_popup" data-role="none">Send</button>
					</div>

            </form>
        	</div>

			<div data-role="popup" data-position-to="window" data-transition="pop" class="popup" style="padding: 20px;"
            id="popupBasic">
            <form id="formProfile" onsubmit="event.preventDefault(); saveProfileInformation()">
                <h3 class="heading-three" style="text-align:center;">Edit Profile Information</h3>
                <label class="labelform grey heading-five" for="nameForm"> Name</label>
                <input type="text" name="name" id="nameForm" placeholder="John Doe" class="formField" />
                <label class="labelform grey heading-five" for="contactNumberForm"> Contact Number </label>
                <input type="text" name="contactNumber" id="contactNumberForm" placeholder="0768XXXXXX"
                    class="formField" />
                <label class="labelform grey heading-five" for="passwordForm"> Password</label>
                <input type="password" name="password" id="passwordForm" class="formField" />
                <label class="labelform grey heading-five" for="confirmPasswordForm"> Confirm Password</label>
                <input type="password" name="confirmPassword" id="confirmPasswordForm" class="formField" />
                <!-- <button type="submit" class="button-custom" data-role="button">Save</button> -->

				<div class="popup_btn_container" style="display:flex; justify-content:space-evenly;">
						<button id="cancelBtn" onclick="closeEditPopup();"  class="button_popup" data-role="none">Cancel</button>
						<button id="sendBtn" type="submit" class="button_popup" data-role="none">Save</button>
				</div>
            </form>
        </div>

			<div class="profile_video" style="margin-top: 50px;">
				<h3>Want to check how the app functions?</h3>

				<iframe src="https://www.youtube.com/embed/9g8sfVsl2GU" frameborder="0" allowfullscreen></iframe>
			</div>

			<?php include("success_popups.php");?>
			<?php include("footer.php"); ?>
			<?php include("navigation_bar.php"); ?>
		</div>

		<script type="text/javascript" src="js/profile.js"></script>
	</body>
</html>