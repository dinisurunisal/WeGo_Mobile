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
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

	<!-- Custom -->
	<link rel="stylesheet" href="css/style.css" />

	<style>
		.book .booking_details {
			background-image: url("images/booking2.png");
			/* background-repeat:no-repeat;
       		background-size:contain; */
			display: block;
			background-size: contain;
			height: 337px;
			width: 380px;
		}

		.book .booking_details .bk_heading {
			padding-top: 18%;
		}

		.book .booking_details h4 {
			font-weight: 600;
			margin-bottom: 0;
		}
	</style>

</head>

<body>
	<div data-role="page" id="booking_page" class="booking_page">
		<!-- Header -->
		<?php include("header.php"); ?>

		<div class="book">
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
					<p style="padding-bottom: 10px;">
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
								<option value="1">Lodon to Birmingham</option>
								<option value="2">London to Manchester</option>
								<option value="3">London to Cardiff</option>
								<option value="4">London to Rugby</option>
							</select>
						</div>
					</form>
				</div>
			</div>

			<div class="booking_card">
				<p>
					Choose Destination *
				</p>
				<div class="bk_checkbox">
					<form>
						<fieldset data-role="controlgroup">
							<input type="checkbox" name="checkbox-v-2a" id="checkbox-v-2a">
							<label for="checkbox-v-2a">None</label>
							<input type="checkbox" name="checkbox-v-2b" id="checkbox-v-2b">
							<label for="checkbox-v-2b">Big Ben</label>
							<input type="checkbox" name="checkbox-v-2c" id="checkbox-v-2c">
							<label for="checkbox-v-2c">London Eye</label>
						</fieldset>
					</form>
				</div>
			</div>

			<div class="booking_card">
				<p>
					Choose Date *
				</p>
				<div class="bk_datepick">
					<input type="text" data-role="date">
				</div>
			</div>

			<div class="booking_card">
				<p>
					Choose Passengers *
				</p>
				<div>
					<form>
						<div class="ui-field-contain">
							<select name="select-native-1" id="select-native-1">
								<option value="1">One Adult</option>
								<option value="2">Two Adults</option>
								<option value="3">Three Adults</option>
								<option value="4">Four Adults</option>
							</select>
						</div>
					</form>
				</div>
			</div>

			<div class="booking_buttons">
				<button onclick="window.location.href='booking_ticket_details.php'" class="bk_button" style="background:#0174cf; color: white; border-color: transparent; font-size: 15px;">Continue</button>
			</div>
		</div>

		<?php include("footer.php"); ?>
		<?php include("navigation_bar.php"); ?>
	</div>
</body>

</html>