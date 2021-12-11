<!DOCTYPE html>
<html>
	<head>
		<!-- Common -->
		<meta charset="utf-8">
		<title>Destination</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<!-- <link rel="stylesheet" href="css/themes/my-custom-theme.css" /> -->
		<link rel="stylesheet" href="css/destination.css" /> 
		<link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
		<link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />

		<!-- font awesome link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- The three things that jQuery Mobile needs to work -->
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

		<!-- Custom -->
		<script src="js/destination.js"></script>

	</head>

	<body>

		<div data-role="page" id="destination_page" class="destination_page">
			<!-- Header -->
			<?php include("header.php"); ?>

			<div style="margin-top: 50px;">
				<div class="background_image">
					<img src="images/background_find.jpg" id="london_bg" alt="london_bg" width="100%">
				</div>

				<ul id="temp" data-icon="false" style="list-style-type: none; margin: 0; padding: 0;">
					<div id="card_script_1">
						<li>
							<a id="clickedId" onclick="setClickedKitchenObject(this.id)">
								<div class="dest_card">
									<div style="position: relative;">
										<img src="images/destinations/Big Ben.jpg" id="card_image" style="width:100%">
										<div class="dest_content">
											<h4 class="dest_name" id="card_name">Big Ben</h4>
										</div>
										<div class="dest_favourite">
											<i></i>
										</div>
									</div>

									<div class="card_description">
										<div class="details_holder">
											<h5 style='margin: 0px; color:black' id="card_details" class="card_details">
											London's iconic national timepiece</h5>
										</div>
										<div class="price_holder">
											<h2 style="margin-left: 60px; color:black" id="card_price" class="card_price"><b>$333</b> </h2>
										</div>
									</div>
								</div>
							</a>
						</li>
					</div>

					<div id="card_script_2"></div>
				</ul>
				
			</div>

			<?php include("footer.php"); ?>
			<?php include("navigation_bar.php"); ?>
		</div>
	</body>
</html>