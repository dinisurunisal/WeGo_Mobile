<!DOCTYPE html>
<html>

<head>
	<!-- Common -->
	<meta charset="utf-8">
	<title>Browse Kitchen</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/themes/my-custom-theme.css" />
	<link rel="stylesheet" href="css/themes/common_themes.css" />
	<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />

	<!-- the three things that jQuery Mobile needs to work -->
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	<!-- Custom -->
	<link rel="stylesheet" href="css/mb_styles_set_1.css">
	<link rel="stylesheet" href="css/browse_kitchen_styles.css">
	<script src="js/browse_kitchen_script.js"></script>
	
</head>

<body>
	<div data-role="page" id="browse_kitchen" data-theme="d">
		<!-- Header -->
		<?php include("back_button_header.php"); ?>

		<div role="main" class="ui-content">
			<div class="ui-grid-solo">
				<img src="images/alphabetical-order-icon.png" alt="Alphabetical Order Icon" class="grey-text" id="alphabetical-order-icon" onclick="alphabeticalOrderIconClicked()">

				<a href="#popup-browse-kitchen-filter" data-rel="popup" data-transition="pop" onclick="popupBrowseKitchenFilterRestoreDefault()">
					<img src="images/filter-icon.png" alt="Filter Icon" class="grey-text" id="filter-icon">
				</a>

				<!-- Browse Kitchen Filter Popup -->
				<?php include("browse_kitchen_filter_popup.php"); ?>
			</div>

			<div class="ui-grid-solo">
				<h2 class="kitchen-found" id="browse-kitchen-search-results-number">
					0 Kitchens Found : N/A
				</h2>
			</div>

			<img hidden id="placeholder-image-for-browse-kitchen" src="images/placeholder-image-for-browse-kitchen.png" alt="No Kitchens Found Image" />

			<ul id="temp" data-role="listview" data-icon="false">
				<div id="kitchen-script-1">
					<div id="screen-resolution-breakpoint" class="ui-block-b">
						<li class="ui-shadow custom-listview-margin">
							<a id="clickedId" onclick="setClickedKitchenObject(this.id)">
								<div class="ui-grid-a">
									<div class="ui-block-a small-grid">
										<div class="center-image">
											<img src="images/kitchens/culture-colombo.jpg" alt="Kitchen Image" class="ui-li-thumb grey-text" id="kitchen-image-script">
										</div>
									</div>
									<div class="ui-block-b large-grid large-grid-a">
										<h2 class="custom-listview-heading" id="kitchen-name-script">
											Kitchen Name
										</h2>
									</div>
									<div class="ui-block-b large-grid large-grid-b">
										<div class="browse-kitchen-center-text">
											<p class="grey-text text-style-normal" id="kitchen-description-script">
												Kitchen Description
											</p>
										</div>
									</div>
									<div class="ui-block-b large-grid large-grid-a">
										<div class="ui-grid-a">
											<div class="ui-block-a">
												<div class="ui-grid-a">
													<div class="ui-block-a b-grid-small">
														<div class="b-grid-center-image-middle">
															<!-- <a> -->
															<img src="images/star-icon.png" alt="Star Icon" class="grey-text" id="star-icon">
															<!-- </a> -->
														</div>
													</div>
													<div class="ui-block-b">
														<div class="b-grid-center-text">
															<p class="grey-text text-style-normal" id="kitchen-rating-script">
																5.0
															</p>
														</div>
													</div>
												</div>
											</div>
											<div class="ui-block-b">
												<div class="b-grid-center-image-middle b-grid-center-image-right">
													<i id="favouriteId" onclick="addFavourite(this.id)" class="material-icons">
														favorite_border
													</i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</li>
					</div>
				</div>

				<div id="kitchen-script-2"></div>
			</ul>

			<?php include("success_message.php"); ?>

		</div>

		<!-- Inner Footer -->
		<?php include("frese_footer.php"); ?>

		<!-- Footer -->
		<?php include("footer.php"); ?>

	</div>
</body>

</html>