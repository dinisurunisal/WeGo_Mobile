<!DOCTYPE html>
<html>
	<head>
		<!-- Common -->
		<meta charset="utf-8">
		<title>Destination Selected</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<!-- <link rel="stylesheet" href="css/themes/my-custom-theme.css" /> -->
		<link rel="stylesheet" href="css/destination_selected.css" /> 
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
		<script src="js/destination_selected.js"></script>
		<style>
			.ui-content {
				/* background-image:url(images/background_find.jpg);
				background-size: cover; */
			}

			#london_bg {
				height: 380px;
				position: absolute;
				z-index: 0;
			}

			.dest_sel_content_block {
				position: relative;
				background-color: white;
				padding: 20px;
				margin: 40px;
			}

			.dest_sel_internal_block .dest_sel_favourite i {
				padding: 10px 10px 8px !important;
				margin: 0px !important;
				border: none !important;
    			box-shadow: 0px 0px 6px #404040 !important;
			}

			.dest_sel_internal_block .dest_sel_favourite {
				top: 12px !important;
				right: 20px !important;
				position: absolute !important;
				margin: 0 !important;
			}

			.dest_sel_internal_block .dest_sel_heading {
				width: -webkit-fill-available !important;
				align-items: center !important;
				margin-bottom: 12px !important;
			}

			.review_card_section {
				position: inherit !important;
				width: -webkit-fill-available !important;
				padding: 20px 0px !important;
			}

			.dest_review_card {
				display: inline-block;
				width: -webkit-fill-available;
				padding: 16px;
				box-shadow: 0px 0px 6px #c4c4c4 !important;
			}

			.dest_review_card img {
				/* border-style: solid; */
				object-fit: cover;
				border-radius: 50%;
				width: 40px;
				height: 40px;
				/* border-color: black; */
			}

			.dest_reviewer{
				display: inline-flex;
				margin-bottom: 12px;
			}

			.dest_reviewer_info {
				padding-left: 8px;
				display: grid;
			}

			.dest_reviewer_info p{
				margin: 2px;
			}

			.dest_reviewer_raiting {
				display: inline-flex;
				min-inline-size: -webkit-fill-available;
				align-items: center;
			}

			.dest_reviewer_raiting #star_rating_holder {
				margin-right: 8px;
			}

			.reply_btn {
				float: right;
				margin-right: 12px;
			}

			.reply_btn p {
				font-weight: bold;
				margin: 0px !important;
			}

			.des_reply {
				margin-left: 24px;
				display: none;
			}

			.dest_replier {
				display: inline-flex;
				margin-bottom: 12px;
				min-inline-size: -webkit-fill-available;
			}

			.dest_review_reply {
				margin: 12px 0px;
			}

			.dest_replier_info {
				padding-left: 8px;
				display: grid;
			}

			.dest_replier_info p{
				margin: 2px;
			}

		</style>
	</head>

	<body>

		<div data-role="page" id="destination_page" class="destination_page">
			<!-- Header -->
			<?php include("header.php"); ?>

			<div role="main" class="ui-content" style="height: fit-content; padding: 60px 0px;">
				<!-- <div class="dest_background_image" style="margin-top: 50px;"> -->
					<!-- <div class="dest_main_intro"></div> -->
					<img src="images/background_find.jpg" id="london_bg" alt="london_bg" width="100%">

					<div class="dest_sel_content_block">
						<div class="dest_sel_internal_block">
							<div class="dest_sel_heading">
								<span class="dest_sel_heading_name" id="dest_sel_heading_name">London's Big Ben</span>

								<div class="dest_star_rating">
									<div class="dest_star_chip">
										<span id="dest_sel_star_score">4.4</span>
										<i class="material-icons"> star </i>
									</div>
								</div>

								<div class="dest_sel_favourite">
									<i id="favouriteId" onclick="addToFavourites(this.id)" class="material-icons">
										favorite_border
									</i>
								</div>
							</div>

							<div class="dest_sel_main_container">
								<div id="dest_sel_image_container">
									<img src="images/destinations/Big Ben.jpg" id="sel-dest-image" class="sel-dest-image" alt="big_ben" width="100%">
								</div>
								<div id="dest_sel_details_container">
									<table style="width:100%;border-collapse: collapse;" class="dest_top_table_elements">
										<tr>
											<td style="padding: 0px 5px 0px 15px;">
												<i class="material-icons">stars</i>
											</td>
											<td>
												<span class="dest_side_texts" id="dest_sel_about">
													Clock tower in London, England 
												</span>
											</td>
										</tr>
										<tr>
											<td style="padding: 0px 5px 0px 15px;">
												<i class="material-icons">access_time</i>
											</td>
											<td>
												<span class="dest_side_texts" id="dest_sel_time">
													Open 24x7
												</span>
											</td>
										</tr>
										<tr>
											<td style="padding: 0px 5px 0px 15px;">
												<i class="material-icons">location_on</i>
											</td>
											<td>
												<span class="dest_side_texts" id="dest_sel_address">
													London SW1A 0AA, United Kingdom
												</span>
											</td>
										</tr>
										<tr style="height:50px;">
											<td style="padding: 0px 5px 0px 15px">
												<i class="material-icons">groups</i>
											</td>
											<td>
												<span class="dest_side_texts" id="dest_sel_crowd">
												Moderately Crowded
												</span>
											</td>
										</tr>
									</table>

									<div class="dest_bottom_table_elements">
										<table style="text-align: left;">
											<tr>
												<td style="padding: 0px 5px 0px 15px;">
													Tour Price
												</td>
											</tr>
											<tr>
												<td style="padding: 0px 5px 0px 15px;" class="table_price">
													<b id="dest_sel_price">$ 55.00</b>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>

							<div class="dest_sel_description">
								<p> The Houses of Parliament and Elizabeth Tower, commonly called Big Ben, are among London's most iconic landmarks and must-see London attractions. Technically, Big Ben is the name given to the massive bell inside the clock tower, which weighs more than 13 tons (13,760 kg). 
									The clock tower looks spectacular at night when the four clock faces are illuminated. 
								</p>
								<p>
									Big Ben first rang across Westminster on 31 May 1859. A short time later, in September 1859, 
									Big Ben cracked. A lighter hammer was fitted and the bell rotated to present an undamaged section 
									to the hammer. This is the bell as we hear it today.
								</p>
							</div>

							<div class="dest_sel_buttons">
								<button class="book_btn" onclick="window.location.href='booking.php'">
									BOOK TRAIN
								</button>
							</div>

							<div class="review_card_section">
								<h2>Reviews</h2>
								<ul id="temp" data-icon="false" style="list-style-type: none; margin: 0; padding: 0">
									<div id="card_script_1" onclick="openReply()">
										<div id="review-card-resolution-breakpoint">
											<li>
												<div class="dest_review_card">
													<div class="dest_reviewer">
														<img src="images/reviewer1.jpg" id="review_thumb_image">
														<div class="dest_reviewer_info">
															<p>Sherlock Holmes</p>
															<p2>133 Reviews</p2>
														</div>
													</div>
													<div class="dest_reviewer_raiting">
														<div id="star_rating_holder">
															<i id="star_rating_one" class="material-icons" style="font-size: 22px; color:red">star_border</i>
															<i id="star_rating_two" class="material-icons" style="font-size: 22px; color:red">star_border</i>
															<i id="star_rating_three" class="material-icons" style="font-size: 22px; color:red">star_border</i>
															<i id="star_rating_four" class="material-icons" style="font-size: 22px; color:red">star_border</i>
															<i id="star_rating_five" class="material-icons" style="font-size: 22px; color:red">star_border</i>
														</div>
														<p2>3 days ago</p2>
													</div>
													<p class="dest_review_comment">One of the most beautiful and iconic site in London. It's amazing to see the architecture in person!</p>
													<div class="dest_review_reply">
														<div  class="reply_btn">
															<p>Reply</p>
														</div>
														<div class="des_reply">
															<div class="dest_replier">
																<img src="images/reviewer1.jpg" id="review_thumb_image">
																<div class="dest_replier_info">
																	<p>Sherlock Holmes</p>
																	<p2>133 Reviews</p2>
																</div>
															</div>
															<!-- <p>Sherlock Holmes</p>
															<p2>133 Reviews</p2> -->
															<p2>Just now</p2>
															<p class="dest_review_reply">One of the most beautiful and iconic site in London. It's amazing to see the architecture in person!</p>
														</div>
													</div>
												</div>
											</li>
										</div>
									</div>

									<div id="card_script_2"></div>
								</ul>
							</div>

						</div>
					</div>

					<!-- <div class="review_card_section">
						<ul id="temp" data-icon="false" style="list-style-type: none; margin: 0; padding: 0">
							<div id="card_script_1">
								<div id="review-card-resolution-breakpoint">
									<li>
										<div class="dest_review_card">
											<div style="position: relative;">
												<div class="thumb_image_div">
													<img src="images/reviewer1.jpg" id="review_thumb_image">
												</div>
												<div class="dest_review_content">
													<h4 class="dest_review_name" id="dest_review_name">Big Ben</h4>
												</div>
										</div>
									</li>
								</div>
							</div>

							<div id="card_script_2"></div>
						</ul>
					</div> -->
				<!-- </div> -->

			</div>

			<?php include("success_popups.php"); ?>


			<?php include("footer.php"); ?>
			<?php include("navigation_bar.php"); ?>
		</div>
	</body>
</html>