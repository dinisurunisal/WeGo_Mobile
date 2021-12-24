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

		<!-- bootstrap -->
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

		<!-- The three things that jQuery Mobile needs to work -->
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

		<!-- Custom -->
		<script src="js/destination_list.js"></script>

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
					<a href="#popup_destination_filter" data-rel="popup" data-transition="pop" onclick="popupDestinationRestoreDefault()">
						<img src="images/icons/filterIcon.png" alt="Filter Icon" class="grey-text" id="dest_filter_icon">
					</a>

					<!-- Destination Filter Popup -->
					<?php include("destination_filter_popup.php"); ?>
					<!-- <div class="wrap">
						<div class="search">
							<input type="text" class="searchTerm" placeholder="What are you looking for?">
							<button data-theme="none" type="submit" class="searchButton">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div> -->
					<div class="dest_map_button">
						<a onclick="goToDestinationMap()">
							Map
						</a>
					</div>

				</div>
			</div>

			<div role="main" class="ui-content">
				<ul id="temp" data-icon="false" style="list-style-type: none; margin: 0; padding: 0">
					<div id="card_script_1">
						<div id="screen-resolution-breakpoint">
							<li>
								<a id="clickedId" onclick="onDestinationSelect(this.id)"> 
									<div class="dest_card">
										<div style="position: relative;">
											<img src="images/destinations/Big Ben.jpg" id="card_image" style="width:100%">
											<div class="dest_content">
												<h4 class="dest_name" id="card_name">Big Ben</h4>
											</div>
											<div class="dest_star_rating">
												<div class="dest_star_chip">
													<span id="card_star_score">4.4</span>
													<i class="material-icons" style="font-size: 20px; vertical-align: -2px"> star </i>
												</div>
											</div>
											<div class="dest_favourite">
												<i onclick="addToFavourites(this.id)"></i>
											</div>
										</div>

										<div class="card_description">
											<div class="details_holder">
												<h5 style='margin: 0px; color:black' id="card_details" class="card_details">
												London's iconic national timepiece</h5>
											</div>
											<div class="price_holder">
												<h2 style="margin-left: 35px; color:black" id="card_price" class="card_price"><b>$333</b> </h2>
											</div>
										</div>
									</div>
								</a>
							</li>
						</div>
					</div>

					<div id="card_script_2"></div>
				</ul>

				
			</div>


			<?php include("footer.php"); ?>
			<?php include("navigation_bar.php"); ?>
		</div>
	</body>
</html>