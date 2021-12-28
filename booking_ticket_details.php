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
	<script
        src="https://www.paypal.com/sdk/js?client-id=AbH_Jnmi7kSr89TNkVxzUkiIc8L1J22tBdqSqmOtsff7Fv3R0cDjX_ceL9CUWYf8biaqDu_2hQK1_D1T">
    </script>

	<script src="js/booking_ticket_details.js"></script>

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
			line-height: 14px;
			letter-spacing: 0.01em;
			color: #404040;
		}

		.tickets .tk_heading p {
			font-family: Noto Sans;
			font-size: 14px;
			line-height: 0;
			letter-spacing: 0.01em;
			color: #404040;
		}

		.tickets .booking_card {
			padding-bottom: 1%;
			background-color: #ffffff;
			box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
			transition: 0.3s;
			border-radius: 15px;
			margin: 5%;
		}

		.tickets .booking_card {
			margin-top: 10%;
			background-image: url("images/bookBackground.png");
			display: block;
			background-size: contain;
			background-repeat: no-repeat;
			height: 138px;
			width: 334px;
		}

		.tk_depature {
			padding-top: 2.5%;
			margin-left: 12%;

		}

		.tk_depature h4 {
			line-height: 0;
			margin-right: 10%;
		}

		.tk_depature p {
			font-size: 14px;
			line-height: 0;
			margin-right: 10%;
		}

		.depature {
			float: left;
		}

		.arrival {
			margin-right: 2%;
			float: right;
		}

		.duration {
			margin-top: 22%;
			text-align: center;
			margin-right: 4%;
		}

		.duration p {
			line-height: 6px;
		}

		.booking_card_two {
			padding-bottom: 1%;
			background-color: #ffffff;
			box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
			transition: 0.3s;
			border-radius: 15px;
			margin: 5%;
			margin-top: 10%;
			height: 226px;
			width: 334px;
		}

		.tk_details_one {
			margin-left: 6%;
			padding-top: 1%;
		}

		.tk_details_one p {
			font-size: 15px;
		}

		.tk_details_one h4 {
			margin-top: 5%;
			margin-right: 24%;
		}

		.tk_details_two {
			margin-left: 6%;
			padding-top: 17%;
		}

		.tk_details_two p {
			font-size: 15px;
		}

		.tk_details_two h4 {
			margin-top: 5%;
			margin-right: 24%;
		}

		.tk_details_three {
			margin-left: 6%;
			padding-top: 17%;
		}

		.tk_details_three p {
			font-size: 15px;
		}

		.tk_details_three h4 {
			margin-top: 5%;
			margin-right: 24%;
		}

		.tk_details_four {
			margin-left: 6%;
			padding-top: 17%;
		}

		.tk_details_four p {
			font-size: 15px;
		}

		.tk_details_four h4 {
			margin-top: 5%;
			margin-right: 24%;
		}

		.booking_card_three {
			padding-bottom: 1%;
			background-color: #ffffff;
			box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
			transition: 0.3s;
			border-radius: 15px;
			margin: 5%;
			margin-top: 10%;
			height: 560px;
			width: 334px;
		}

		.left-panel {
			width: 47%;
			float: left;
		}

		.right-panel {
			width: 47%;
			float: right;
		}

		.custom-content {
			margin: 20px;
			line-height: 25px;
		}

		.scrollingContainer {
			background-color: #eeeeee;
			width: 100%;
			height: 250px;
			overflow: scroll;
		}

		.buttonGroup {
			margin: 4%;
			display: -webkit-box;
			padding-inline-start: 0px;
		}

		.buttonGroup>li {
			display: block;
			-webkit-box-flex: 1;
			text-align: center;
			background-image:
				-webkit-gradient(linear, left top, left bottom,
					from(#fff),
					to(#fff));
			color: #000;
			font-size: 12px;
			padding: 10px;
			border-radius: 8px !important;
			/*line-height: 3px;*/
		}

		.buttonGroup>li.selected {
			-webkit-border-radius: 20px;
			background-image:
				-webkit-gradient(linear, left top, left bottom,
					from(#0174CF),
					to(#0174CF));
			color: #fff;
			text-shadow: none !important;
		}

		.cart-items-container {
			list-style: none;
			padding: 0;
		}

		.cart-item {
			width: 100%;
			height: 30px;
			margin-bottom: 5px;
			/*background-color: white;*/
		}

		.ui-block-a.item-quantity {
			margin-left: 5%;
			/*background-color: transparent;*/
			text-align: center;
		}

		.ui-block-c.remove-item {
			position: relative;
			left: 0;
			color: red;
		}

		.booking_card_three h4 {
			font-size: 20px;
			padding-top: 5%;
			margin-left: 5%;
			margin-bottom: 1%;
		}

		@media only screen and (max-width: 600px) {
			h1 {
				margin-top: 0;
			}

			.right-panel {
				width: 100%;
				float: left;
			}

			.left-panel {
				width: 100%;
				float: left;
			}

			.scrollingContainer {
				margin-bottom: 25px;
			}
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
				<p>
					Confirm your ticket details from here
				</p>
			</div>
			<div class="booking_card">
				<div class="tk_depature">
					<div class="depature">
						<h4 id="route_start_ID">
							EUS
						</h4>
						<p id="route_start_name">
							London
						</p>
					</div>

					<div class="arrival">
						<h4 id="route_finish_ID">
							BHM
						</h4>
						<p id="route_finish_name">
							Birmingham
						</p>
					</div>
					<div class="duration">
						<p id="route_duration">
							02:00hr
						</p>
						<p id="route_distance">
							500km
						</p>
					</div>
				</div>
			</div>
			<div class="booking_card_two" style="margin-top: 2%;">
				<div class="tk_details_one">
					<p style="float: left;">Ticket Type</p>
					<h4 style="float: right;" id="ticket_type">One Way</h4>
				</div>
				<div class="tk_details_two">
					<p style="float: left;">Chosen Destination</p>
					<h4 style="float: right;" id="poi_destination">Big Ben</h4>
					<h4 style="float: right;" id="poi_destination_2"></h4>
				</div>
				<div class="tk_details_three">
					<p style="float: left;">Date</p>
					<h4 style="float: right;" id="date_book">12-12-2020</h4>
				</div>
				<div class="tk_details_four">
					<p style="float: left;">Passengers</p>
					<h4 style="float: right;" id="number_passengers">2</h4>
				</div>
			</div>

			<div class="booking_card_three" style="margin-top: 2%;">
				<h4>
					Payment
				</h4>
				<div class="right-panel">
					<ul class="buttonGroup" id="paymentMethod">
						<li class="selected" data-value="cash">Cash</li>
						<li data-value="credit-card">Credit Card</li>
						<li data-value="paypal">PayPal</li>
					</ul>
					<div data-role="content">
						<div class="left-panel" style="width: 40%; float:left;">
							<h1 class="heading-four" style="font-size: 20px;">Sub-Total</h1>
							<h1 class="paragraph" style="font-size: 15px;">Service Charges</h1>
							<h1 class="heading-three" style="font-size: 25px;">Total</h1>
							<h1 class="paragraph" id="pointsContainer" style="margin-top:30px; font-size: 13px;">0 points available</h1>
							<br>
							<h1 id="total-w-discount-text" class="heading-three" style="margin-top:15px; opacity: 0; font-size: 20px;">
								Total w/ Discount</h1>
						</div>
						<div class="right-panel" style="width: 60%; float:right; text-align:right;">
							<h1 id="sub-total" class="heading-four" style="font-size: 20px;">LKR 0</h1>
							<h1 id="service-charges" class="paragraph" style="font-size: 15px;">LKR 0</h1>
							<h1 id="total-price" class="heading-three" style="font-size: 25px;">LKR 0</h1>
							<input id="pointsChecked" type="checkbox" name="points" style="margin-top:10px; position: relative; float:right; z-index: 0 !important;" value="Points" onclick="usePoints()">
							<h1 class="paragraph" style="margin-top:30px; font-size: 13px;">Use Points</h1>
							<br>
							<h1 id="total-w-discount" class="heading-three" style="margin-top: 15px; opacity: 0; font-size: 20px;">LKR 0
							</h1>
						</div>
					</div>
					<button id="placeOrder" onclick="placeOrder('approved')" style="text-shadow:none; background-color: #0174CF; color: #ffffff; margin-left: auto; margin-right: auto; margin-top: 6%; width: 180px;">Place Order </button>
					<a href="#popupDialog" id="placeOrderLink" data-transition="pop" data-position-to="window" data-rel="popup" style="color: white;pointer-events: none;"></a>
					<div id="paypal-button-container" style="display: none;"></div>
					<div id="paypal-card-container" style="display: none;"></div>
					<button style="text-shadow:none; background-color: #ffffff; color: #0174CF; margin-left: auto; margin-right: auto; margin-top: 2%; width: 180px; border-color: #ddd;"> Cancel </button>
				</div>
			</div>
		</div>
		<?php
            include("success_popups.php");
        ?>

		<?php include("footer.php"); ?>
		<?php include("navigation_bar.php"); ?>
	</div>
</body>

</html>