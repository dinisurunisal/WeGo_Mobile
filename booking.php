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
	<script type="text/javascript" src="js/booking.js"></script>

	<script>
		$(document).ready(function() {
			$('#select-native-1').on('change', function() {
				if (this.value == '1') {
					$("#booking_details_1").show();
					$("#check_1").show();
				} else {
					$("#booking_details_1").hide();
					$("#check_1").hide();
				}

				if (this.value == '2') {
					$("#booking_details_2").show();
					$("#check_2").show();
					$("#check_5").show();
				} else {
					$("#booking_details_2").hide();
					$("#check_2").hide();
					$("#check_5").hide();
				}

				if (this.value == '3') {
					$("#booking_details_3").show();
					$("#check_3").show();
				} else {
					$("#booking_details_3").hide();
					$("#check_3").hide();
				}

				if (this.value == '4') {
					$("#booking_details_4").show();
					$("#check_4").show();
				} else {
					$("#booking_details_4").hide();
					$("#check_4").hide();
				}
			});
		});

		$(document).ready(function() {
			$('#checkbtn').click(function() {
				checked = $("input[type=checkbox]:checked").length;

				if (!checked) {
					alert("You must check at least one destination checkbox.");
					return false;
				}

			});
		});
	</script>

	<style>

		@media only screen and (min-device-width: 375px) and (max-device-width: 667px) {
			.book .booking_details {
				background-image: url("images/booking2.png");
				display: block;
				background-size: contain;
				height: 337px;
				width: 380px;
				object-fit: cover;
			}

			.book .booking_details .bk_heading {
				padding-top: 18%;
			}

			.book .booking_details h4 {
				font-weight: 600;
				margin-bottom: 0;
			}

			.book .booking_card {
				margin: 5%;
			}
		}

		@media only screen and (min-device-width: 768px) and (max-device-width: 850px) {
			.book .booking_details {
				background-image: url("images/booking2.png");
				display: block;
				margin-left: auto;
				margin-right: auto;
				background-size: contain;
				height: 337px;
				width: 380px;
				object-fit: cover;
			}

			.book .booking_details .bk_heading {
				padding-top: 18%;
			}

			.book .booking_details h4 {
				font-weight: 600;
				margin-bottom: 0;
			}

			.book .booking_card {
				margin: 3%;
			}
		}

		@media only screen and (min-device-width: 1024px) {
			.book .booking_details {
				background-image: url("images/booking2.png");
				display: block;
				margin-left: auto;
				margin-right: auto;
				background-size: contain;
				height: 337px;
				width: 380px;
				object-fit: cover;
			}

			.book .booking_details .bk_heading {
				padding-top: 18%;
			}

			.book .booking_details h4 {
				font-weight: 600;
				margin-bottom: 0;
			}

			.book .booking_card {
				margin: 3%;
			}
		}
	</style>

</head>

<body>
	<div data-role="page" id="booking_page" class="booking_page">
		<!-- Header -->
		<?php include("header.php"); ?>

		<div class="book">
			<div style="background-color: #0174cf; border-radius: 15px">
				<div class="booking_details">
					<div class="bk_heading">
						<h1>
							Booking
						</h1>
					</div>

					<div style="display: none;" id="booking_details_1">
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

					<div style="display: none;" id="booking_details_2">
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
								1:30hr
							</p>
							<p>
								300km
							</p>
						</div>

						<div class="bk_arrival">
							<h4>
								MAN
							</h4>
							<p>
								Manchester street
							</p>
						</div>
					</div>

					<div style="display: none;" id="booking_details_3">
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
								3:00hr
							</p>
							<p>
								600km
							</p>
						</div>

						<div class="bk_arrival">
							<h4>
								CDF
							</h4>
							<p>
								Cardiff Central
							</p>
						</div>
					</div>

					<div style="display: none;" id="booking_details_4">
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
								4:00hr
							</p>
							<p>
								700km
							</p>
						</div>

						<div class="bk_arrival">
							<h4>
								WCML
							</h4>
							<p>
								Rugby Railway
							</p>
						</div>
					</div>

				</div>
			</div>

			<form id="form" onsubmit="event.preventDefault(); bookOne()">
				<div data-role="navbar" class="toggle_book">
                    <ul>
                        <li><a id="oneway-btn" href="#" class="toggle_book-buttons ui-btn-active" onclick="selectRouteType(this.id)">One Way</a></li>
                        <li><a id="roundtrip-btn" class="toggle_book-buttons" href="#" onclick="selectRouteType(this.id)">Round Trip</a></li>
                    </ul>
                </div>

				<div class="booking_card">
					<p>
						Choose Route *
					</p>
					<div>
						<div class="ui-field-contain">
							<select required name="select-native-1" id="select-native-1">
								<option value="0">None</option>
								<option value="1">Lodon to Birmingham</option>
								<option value="2">London to Manchester</option>
								<option value="3">London to Cardiff</option>
								<option value="4">London to Rugby</option>
							</select>
						</div>

					</div>
				</div>

				<div class="booking_card">
					<p>
						Choose Destination *
					</p>
					<div class="bk_checkbox">

						<fieldset data-role="controlgroup">
							<div style="display: none;" id="check_1">
								<input type="checkbox" name="checkbox-v-2b" id="checkbox-v-2b">
								<label for="checkbox-v-2b">one</label>
							</div>

							<div style="display: none;" id="check_2">
								<input type="checkbox" name="checkbox-v-2c" id="checkbox-v-2c">
								<label for="checkbox-v-2c">two</label>
							</div>

							<div style="display: none;" id="check_3">
								<input type="checkbox" name="checkbox-v-2d" id="checkbox-v-2d">
								<label for="checkbox-v-2d">three</label>
							</div>

							<div style="display: none;" id="check_4">
								<input type="checkbox" name="checkbox-v-2e" id="checkbox-v-2e">
								<label for="checkbox-v-2e">four</label>
							</div>

							<div style="display: none;" id="check_5">
								<input type="checkbox" name="checkbox-v-2f" id="checkbox-v-2f">
								<label for="checkbox-v-2f">five</label>
							</div>

						</fieldset>

					</div>
				</div>

				<div class="booking_card">
					<p>
						Choose Date *
					</p>
					<div class="bk_datepick">
						<input required type="date" data-role="date" id="datePicker">
					</div>
				</div>

				<div class="booking_card">
					<p>
						Choose Passengers *
					</p>
					<div>
						<div class="ui-field-contain">
							<select required name="select-native-2" id="select-native-2">
								<option value="1">One Adult</option>
								<option value="2">Two Adults</option>
								<option value="3">Three Adults</option>
								<option value="4">Four Adults</option>
							</select>
						</div>

					</div>
				</div>

				<div class="booking_buttons">
					<button type="submit" class="bk_button" style="background:#0174cf; color: white; border-color: transparent; font-size: 15px;" id="checkbtn">Continue</button>
					<!-- onclick="window.location.href='booking_ticket_details.php'" -->
				</div>
			</form>
		</div>

		<?php include("footer.php"); ?>
		<?php include("navigation_bar.php"); ?>
	</div>
</body>

</html>