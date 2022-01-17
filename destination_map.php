<!DOCTYPE html>
<html>
	<head>
		<!-- Common -->
		<meta charset="utf-8">
		<title>Destination List</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<!-- <link rel="stylesheet" href="css/themes/my-custom-theme.css" /> -->
		<link rel="stylesheet" href="css/destination_list.css" /> 
		<link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
		<link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />

		<!-- font awesome link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- The three things that jQuery Mobile needs to work -->
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

		<!-- Custom -->
		<script src="js/destination_map.js"></script>

		<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
		<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTaSledUuIuOU0iipt8JzdHB2J-ZJayr4&callback=initMap" ></script>

		<style>
			/* Always set the map height explicitly to define the size of the div
				* element that contains the map. */
			#map {
				height: 480px;
			}

		</style>

	</head>

	<body>

		<div data-role="page" id="destination_page" class="destination_page">
			<!-- Header -->
			<?php include("header.php"); ?>

			<div class="dest_background_image" style="margin-top: 50px;">
				<div class="dest_main_intro">
					<h2 class="dest_heading">Find your England</h2>
					<h4 class="dest_sub_heading">From royal buildings and world famous artwork to architectural sites and buzzing cities.</h4>
				</div>
				<img src="images/background_find.jpg" id="london_bg" alt="london_bg" width="100%">

				<div class="dest_nav_bar">
					<div class="dest_map_button">
						<a onclick="goToDestinationList()">
							List
						</a>
					</div>

				</div>
			</div>

			<div role="main" class="ui-content" style="height: 480px;">
				<div id="map">
				</div>
			</div>


			<?php include("footer.php"); ?>
			<?php include("navigation_bar.php"); ?>
		</div>

	</body>
</html>