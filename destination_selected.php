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
		<link rel="stylesheet" href="css/style.css" /> 
		<link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
		<link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />

		<!-- font awesome link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- The three things that jQuery Mobile needs to work -->
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

		<!-- Custom -->
		<script src="js/destination_selected.js"></script>

	</head>

	<body>

		<div data-role="page" id="destination_selected_page" class="destination_selected_page">
			<!-- Header -->
			<?php include("header.php"); ?>

			<div role="main" class="ui-content" style="height: 100%; margin-top: 50px; padding: 0px;">

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
							<p id="dest_sel_description1"> The Houses of Parliament and Elizabeth Tower, commonly called Big Ben, are among London's most iconic landmarks and must-see London attractions. Technically, Big Ben is the name given to the massive bell inside the clock tower, which weighs more than 13 tons (13,760 kg). 
								The clock tower looks spectacular at night when the four clock faces are illuminated. 
							</p>
							<p id="dest_sel_description2">
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
							<ul id="temp" data-icon="false" style="list-style-type: none; margin: 0; padding: 0; display: inline-block;">
								<div id="review_card">
									<div id="review-card-resolution-breakpoint">
										<li>
											<div class="dest_review_card" id="temp_review_id">
												<div class="dest_reviewer">
													<img src="images/reviewer1.jpg" id="review_thumb_image">
													<div class="dest_reviewer_info">
														<p id="dest_reviewer_name">Sherlock Holmes</p>
														<p2 id="dest_reviewer_count">133 Reviews</p2> 
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
													<p2 id="dest_reviewer_date">3 days ago</p2>
												</div>
												<p class="dest_review_comment" id="dest_review_comment">One of the most beautiful and iconic site in London. It's amazing to see the architecture in person!</p>
												<div id="reply_count_id" class="dest_review_reply">
													<p2 class="review_count" id="temp_count" onclick="openReplies(this.id)">Reply count</p2>
													<div class="reply_btn" id="temp_reply_btn_id" onclick="onReplyClick(this.id)">
														<a id="reply_popup_link" href="#destination_reply" data-rel="popup" data-transition="pop" data-position-to="window">
															<button id="reply_button"><p>Reply</p></button>
														</a>  
													</div>
													<div id="des_reply">
														<div class="dest_replier">
															<img src="images/reviewer1.jpg" id="replier_image">
															<div class="dest_replier_info">
																<p id="replier_name">Name</p>
																<p2 id="replier_reviews">Reviews</p2>
															</div>
															<p2 id="replier_time">Time</p2>
														</div>
														<p id="dest_review_reply">Reply</p>
													</div>
													<div id="reply_space"></div>
												</div>
											</div>
										</li> 
									</div>
								</div>
								<div id="review_space"></div>
							</ul>
						</div>

					</div>
				</div>
				<?php include("destination_reply.php")?>
			</div>

			<!-- <div role="main" class="ui-content">
		
			</div> -->

			<?php include("success_popups.php"); ?>
			<?php include("footer.php"); ?>
			<?php include("navigation_bar.php"); ?>
		</div>
	</body>
</html>