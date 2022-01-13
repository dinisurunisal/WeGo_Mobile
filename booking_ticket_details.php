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
	<script src="https://www.paypal.com/sdk/js?client-id=AYImqnFyv8Ed8f1Q2yxi8OU9pZcsU2YigmWEvZN2VYHP39Bog3XpOaZ6ErmMzkEOZnlsziDFfO2uuc71"></script>
	<script src="https://checkout.stripe.com/checkout.js"></script>

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
			display: grid;
			background-size: contain;
			background-repeat: no-repeat;
			height: 138px;
		}

		.tk_depature {
			padding-top: 2.5%;
			display: grid;
			grid-template-columns: 30vw 30vw 30vw;
			align-items: start;
		}

		.tk_depature h4 {
			line-height: 0;
		}

		.tk_depature p {
			font-size: 14px;
			line-height: 0;
		}

		.depature {
			padding-left: 6vw;
		}

		.arrival {
			padding-left: 6vw;
		}

		.duration {
			margin-top: 14vw;
			text-align: center;
		}

		.duration p {
			line-height: 6px;
		}

		.booking_card_two {
			display: grid;
			padding: 20px;
			background-color: #ffffff;
			box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
			transition: 0.3s;
			border-radius: 15px;
			margin: 5%;
		}

		.tk_details_one {
			display: grid;
			grid-template-columns: 45vw auto;
			align-items: baseline;
		}

		.tk_details_one p {
			font-size: 15px;
		}

		.tk_details_two {
			display: grid;
			grid-template-columns: 45vw auto;
			align-items: baseline;
		}

		.tk_details_two p {
			font-size: 15px;
		}

		.tk_details_three {
			display: grid;
			grid-template-columns: 45vw auto;
			align-items: baseline;
		}

		.tk_details_three p {
			font-size: 15px;
		}

		.tk_details_four {
			display: grid;
			grid-template-columns: 45vw auto;
			align-items: baseline;
		}

		.tk_details_four p {
			font-size: 15px;
		}

		.booking_card_three {
			background-color: #ffffff;
			box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
			transition: 0.3s;
			border-radius: 15px;
			margin: 5%;
			display: grid;
			padding: 5px;
		}

		.booking_card_three h4 {
			font-size: 20px;
			padding-left: 4vw;
		}

		.panels {
			display: grid;
		}

		.pricesPanels {
			padding: 1rem;
			display: grid;
			grid-template-columns: auto auto;
			align-items: baseline;
		}

		.right-panel {
			text-align: right;
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

		.paypal-card1 {
			display: grid;
			width: 54vw;
			margin-bottom: 1vh;
		}

		.paypal-card2 {
			display: grid;
			justify-content: center;
		}

		@media only screen and (min-device-width: 375px) and (max-device-width: 667px) {
			.tickets .booking_card {
				background-image: url("images/bookBackground.png");
			}

			.tk_depature {
				justify-items: center;
			}
		}

		@media only screen and (min-device-width: 768px) and (max-device-width: 850px) {
			.tickets .tk_heading {
				margin-top: 14%;
			}

			.tickets .booking_card {
				margin-top: 6%;
				background-image: url("images/bookBackground2.png");
				height: 150px;
			}

			.tk_depature {
				padding-top: 0.5%;
			}

			.depature {
				padding-left: 9vw;
			}

			.duration {
				margin-top: 9vw;
			}

			.arrival {
				padding-left: 14vw;
			}
		}

		@media only screen and (min-device-width: 1024px) {
			.tickets .tk_heading {
				margin-top: 10%;
			}

			.tickets .booking_card {
				margin-top: 4%;
			}

			.tickets .booking_card {
				margin-top: 6%;
				background-image: url("images/bookBackground3.png");
				height: 138px;
			}

			.tk_depature {
				padding-top: 0.5%;
			}

			.depature {
				padding-left: 19vw;
			}

			.duration {
				margin-top: 6vw;
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

					<div class="duration">
						<p id="route_duration">
							02:00hr
						</p>
						<p id="route_distance">
							500km
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
				</div>
			</div>
			<div class="booking_card_two" style="margin-top: 2%;">
				<div class="tk_details_one">
					<p>Ticket Type</p>
					<h4 id="ticket_type">One Way</h4>
				</div>
				<div class="tk_details_two">
					<p>Chosen Destination</p>
					<h4 id="poi_destination">Big Ben</h4>
					<h4 id="poi_destination_2"></h4>
				</div>
				<div class="tk_details_three">
					<p>Date</p>
					<h4 id="date_book">12-12-2020</h4>
				</div>
				<div class="tk_details_four">
					<p>Passengers</p>
					<h4 id="number_passengers">2</h4>
				</div>
			</div>

			<div class="booking_card_three" style="margin-top: 2%;">
				<h4>
					Payment
				</h4>
				<div class="panels">
					<ul class="buttonGroup" id="paymentMethod">
						<li class="selected" data-value="cash">Cash</li>
						<li data-value="credit-card">Credit Card</li>
						<li data-value="paypal">PayPal</li>
					</ul>
					<div data-role="content" class="pricesPanels">
						<div class="left-panel">
							<h1 class="heading-four" style="font-size: 20px;">Sub-Total</h1>
							<h1 class="paragraph" style="font-size: 15px;">Service Charges</h1>
							<h1 class="heading-three" style="font-size: 25px;">Total</h1>
							<h1 class="paragraph" id="pointsContainer" style="margin-top:30px; font-size: 13px;">0 points available</h1>
							<br>
							<h1 id="total-w-discount-text" class="heading-three" style="margin-top:15px; opacity: 0; font-size: 20px;">
								Total w/ Discount</h1>
						</div>
						<div class="right-panel">
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
					<div style="display: grid; justify-items:center;">
						<button id="placeOrder" onclick="placeOrder('approved')" style="text-shadow:none; background-color: #0174CF; color: #ffffff; margin-left: auto; margin-right: auto; margin-top: 6%; width: 180px;">Place Order </button>
						<!-- <a href="#popupDialog" id="placeOrderLink" data-transition="pop" data-position-to="window" data-rel="popup" style="color: white;pointer-events: none;"></a> -->
						<div id="paypal-button-container" style="display: none;" class="paypal-card1"></div>
						<div id="card-payment-btn" style="display: none;" class="paypal-card2">
							<button id="cardPaymentButton" style="text-shadow:none; background-color: #0174CF; color: #ffffff; margin-left: auto; margin-right: auto; margin-top: 6%; width: 180px;">Pay <span id="totNumberDisplay"></span></button>
						</div>
						<!-- <div id="paypal-card-container" style="display: none;" class="paypal-card2"></div> -->

						<button onclick="cancel()" style="text-shadow:none; background-color: #ffffff; color: #0174CF; margin-left: auto; margin-right: auto; margin-top: 2%; width: 180px; border-color: #ddd;"> Cancel </button>

					</div>
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