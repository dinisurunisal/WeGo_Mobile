<!DOCTYPE html>
<html>

<head>
	<!-- Common -->
	<meta charset="utf-8">
	<title>Destination</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
	<link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />

	<!-- The three things that jQuery Mobile needs to work -->
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	<!-- Custom -->
	<link rel="stylesheet" href="css/style.css" />
	<script src="js/favorites_list_share.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>

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
				<h2 id="display-message" style="display: none; margin-top: 30vh; margin-bottom: 30vh;">
					No favorites selected.
				</h2>
			</div>
			<ul id="temp" data-icon="false" style="list-style-type: none; margin: 0; padding: 0">
				<div id="card_script_1">
					<div id="screen-resolution-breakpoint">
						<li>
							<a id="clickedId" onclick="onDestinationSelect(this.id)">
								<div class="dest_card">
									<div style="position: relative;">
										<img id="card_image" src="images/destinations/Big Ben.jpg" id="card_image" style="width:100%">
										<div class="sub_card">
											<h4 id="card_name" class="dest_name">BIG BEN</h4>
											<p id="card_details" class="dest_discription">Big Ben is the nickname for the Great Bell of the striking clock at the north end of the Palace of Westminster</p>
										</div>
										<div class="dest_favourite">
											<i id="favouriteId" onclick="addToFavourites(this.id)" class="material-icons">
											favorite_border
											</i>
										</div>
									</div>
								</div>
							</a>
						</li>
					</div>
				</div>

				<div id="card_script_2"></div>
			</ul>

			<div class="favourite_buttons">
				<button onclick="showEmailPopup();" id="fa-share-btn" class="fa_button" style="display: none;">Share</button>
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

		<?php include("success_popups.php"); ?>
		<?php include("footer.php"); ?>
		<?php include("navigation_bar.php"); ?>
	</div>
</body>

</html>