<!DOCTYPE html>
<html>

<head>
	<!-- Common -->
	<meta charset="utf-8">
	<title>Destination</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- The three things that jQuery Mobile needs to work -->
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	<!--bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Custom -->
	<link rel="stylesheet" href="css/style.css" />

	<style>
		.booking_details {
			background-image: url("images/booking2.png");
			/* background-repeat:no-repeat;
   			background-size:contain; */
			display: block;
			background-size: contain;
			height: 337px;
			width: 380px;
		}

		.booking_details h1 {
			text-align: center;
			font-family: Noto Sans;
			font-weight: 900;
			font-size: 30px;
			line-height: 28px;
			letter-spacing: 0.01em;
			color: #ffffff;
		}

		.booking_details .bk_heading {
			padding-top: 23%;
		}

		.booking_details .bk_depature {
			color: #ffffff;
			margin-left: 53%;
			margin-top: 8%;
		}

		.booking_details h4 {
			font-weight: 600;
		}

		.booking_details .bk_duration {
			margin-top: 9%;
			margin-left: 32%;
		}

		.booking_details p {
			font-family: Noto Sans;
			font-size: 14px;
			line-height: 0;
			letter-spacing: 0.01em;
			color: #ffffff;
		}

		.booking_details .bk_arrival {
			color: #ffffff;
			margin-left: 53%;
			margin-top: 8%;
		}

		.booking_card {
			box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
			transition: 0.3s;
			border-radius: 15px;
			margin: 5%;
		}

		.booking_card p {
			padding: 5%;
			font-family: Noto Sans;
			font-size: 14px;
			letter-spacing: 0.01em;
			color: #404040;
		}
	</style>

</head>

<body>
	<div data-role="page" id="booking_page" class="booking_page">
		<!-- Header -->
		<?php include("header.php"); ?>


		<div class="booking_details">
			<div class="bk_heading">
				<h1>
					Booking
				</h1>
			</div>

			<div class="bk_depature">
				<h4>
					EUS
				</h4>
				<p>
					London Euston
				</p>
			</div>

			<div class="bk_duration">
				<p style="line-height: 10px;">
					2:00hr
				</p>
				<p>
					500km
				</p>
			</div>

			<div class="bk_arrival">
				<h4>
					BHM
				</h4>
				<p>
					Birmingham street
				</p>
			</div>
		</div>

		<div class="booking_card">
			<p>
				Choose Route *
			</p>
			<div>
				<form>
					<div class="ui-field-contain">
						<select name="select-native-1" id="select-native-1">
							<option value="1">The 1st Option</option>
							<option value="2">The 2nd Option</option>
							<option value="3">The 3rd Option</option>
							<option value="4">The 4th Option</option>
						</select>
					</div>
				</form>
			</div>
		</div>

		<div class="booking_card">
			<p>
				Choose Destination *
			</p>
		</div>

		<div class="booking_card">
			<p>
				Choose Date *
			</p>
		</div>

		<div class="booking_card">
			<p>
				Choose Passengers *
			</p>
		</div>

		<?php include("footer.php"); ?>
		<?php include("navigation_bar.php"); ?>
	</div>
</body>

</html>