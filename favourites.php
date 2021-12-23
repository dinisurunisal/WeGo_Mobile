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
	<script src="js/destination_list.js"></script>
	<script src="js/favorites_list_share.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		.favourites .fa_heading h1 {
			text-align: center;
			font-family: Noto Sans;
			font-weight: 900;
			font-size: 30px;
			line-height: 14px;
			letter-spacing: 0.01em;
			color: #404040;
		}

		.favourites .fa_heading p {
			font-family: Noto Sans;
			font-size: 14px;
			line-height: 0;
			letter-spacing: 0.01em;
			color: #404040;
		}

		.favourites .dest_card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			transition: 0.3s;
			border-radius: 15px;
			height: 225px;
			/* 15px rounded corners */
			margin: 10px;
		}

		.favourites .dest_card img {
			border-radius: 15px 15px 15px 15px;
			/* Add rounded corners to the top left and the top right corner of the image */
			height: 225px;
			width: 100%;
			object-fit: cover;
		}

		.favourites .dest_card .sub_card {
			position: absolute;
			top: 0;
			border-radius: 15px 15px 15px 15px;
			background: linear-gradient(to left, rgba(0, 0, 0, 0) 0%, rgba(102, 102, 102, 0.8));
			color: #f1f1f1;
			width: 38%;
			padding: 113px;
		}

		.favourites .dest_card .dest_name {
			position: absolute;
			top: 0;
			left: 15px;
			color: white;
			font-size: 24px;
		}

		.favourites .dest_card .dest_discription {
			position: absolute;
			top: 60px;
			width: 245px;
			font-weight: 100;
			left: 15px;
			color: white;
			font-size: 15px;
		}

		.favourites .dest_card .dest_favourite {
			top: 16px;
			right: 15px;
			position: absolute;
			height: 100px;
			margin: 0 auto;
		}

		.favourites .dest_card .dest_favourite i {
			cursor: pointer;
			padding: 10px 12px 8px;
			background: #fff;
			border-radius: 50%;
			display: inline-block;
			margin: 0 0 15px;
			color: #aaa;
			transition: .2s;
		}

		.favourites .dest_card .dest_favourite i:before {
			font-family: fontawesome;
			content: '\f004';
			font-style: normal;
		}

		.favourites .dest_card .dest_favourite i.press {
			animation: size .4s;
			color: #e23b3b;
		}

		.favourites .favourite_buttons {
			margin-top: 12%;
			text-align: center;
		}


		.favourites .favourite_buttons .fa_button {
			margin-left: auto;
			margin-right: auto;
			width: 120px;
			text-align: center;
			background: #0174cf;
			color: white;
			border-color: transparent;
			font-weight: 100;
			font-size: 15px;
		}

		@media only screen and (min-device-width: 375px) and (max-device-width: 667px) {
			.favourites .fa_heading {
			text-align: center;
			margin-top: 25%;
			margin-bottom: 10%;
		}
		}

		@media only screen and (min-device-width: 768px) and (max-device-width: 850px) {
			.favourites .fa_heading {
			text-align: center;
			margin-top: 12%;
			margin-bottom: 5%;
		}
		}

		@media only screen and (min-device-width: 1024px) {
			.favourites .fa_heading {
			text-align: center;
			margin-top: 10%;
			margin-bottom: 4%;
		}
		}
	</style>

</head>

<body>
	<div data-role="page" id="favourites_page">
		<!-- Header -->
		<?php include("header.php"); ?>

		<div role="main" class="favourites">
			<div class="fa_heading">
				<h1>
					Favorites
				</h1>
				<p>
					Find your favorite destinations
				</p>
			</div>
			<ul id="temp" data-icon="false" style="list-style-type: none; margin: 0; padding: 0">
				<div id="card_script_1">
					<div id="screen-resolution-breakpoint">
						<li>
							<a id="clickedId" onclick="onDestinationSelect(this.id)">
								<div class="dest_card">
									<div style="position: relative;">
										<img src="images/destinations/Big Ben.jpg" id="card_image" style="width:100%">
										<div class="sub_card">
											<h4 class="dest_name">BIG BEN</h4>
											<p class="dest_discription">Big Ben is the nickname for the Great Bell of the striking clock at the north end of the Palace of Westminster</p>
										</div>
										<div class="dest_favourite">
											<i onclick="addToFavourites(this.id)"></i>
										</div>
									</div>
								</div>
							</a>
						</li>
					</div>
				</div>
			</ul>

			<div class="favourite_buttons">
				<button onclick="showEmailPopup();" class="fa_button">Share</button>
			</div>

			<div data-role="popup" data-position-to="window" data-transition="pop" class="popup" style="padding: 20px;" id="emailPopup">
				<form id="formProfile" onsubmit="event.preventDefault(); sendEmail()">
					<h3 class="heading-three" style="text-align:center;">Share your Favourites</h3>
					<label class="labelform grey heading-five" for="emailFormShare"> Email </label>
					<input type="text" required name="name" id="emailFormShare" placeholder="johndoe@gmail.com" class="formField" />
					<button id="sendBtn" type="submit" style="margin-top: 15px; background-color: #0174cf; color: #ffffff; text-shadow: none; width: 180px; margin-left: auto; margin-right: auto;" class="button-custom" data-role="button">Send</button>
					<button onclick="closeEmailPopup()" style="text-shadow:none; background-color: #ffffff; color: #0174CF; margin-left: auto; margin-right: auto; margin-top: 2%; width: 180px; border-color: #ddd;">Back</button>
				</form>
			</div>
		</div>

		<?php include("footer.php"); ?>
		<?php include("navigation_bar.php"); ?>
	</div>
</body>

</html>