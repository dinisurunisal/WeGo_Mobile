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
	<script src="js/booking.js"></script>

	<style>
		.tickets .tk_heading {
			text-align: center;
			margin-top: 25%;
		}

		.tickets .tk_heading h1 {
			text-align: center;
			font-family: Noto Sans;
			font-weight: 900;
			font-size: 30px;
			line-height: 28px;
			letter-spacing: 0.01em;
			color: #404040;
		}
	</style>

</head>

<body>
	<div data-role="page" id="booking_tickets_page">
		<!-- Header -->
		<?php include("header.php"); ?>

		<div role="main" class="tickets">
			<div class="tk_heading">
				<h1>
					Ticket Details
				</h1>
			</div>
		</div>

		<?php include("footer.php"); ?>
		<?php include("navigation_bar.php"); ?>
	</div>
</body>

</html>