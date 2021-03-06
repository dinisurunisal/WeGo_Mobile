<!DOCTYPE html>
<html>
	<head>
		<!-- Common -->
		<meta charset="utf-8">
		<title>Destination</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
		<link rel="stylesheet" href="css/style.css" />

		<!-- The three things that jQuery Mobile needs to work -->
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />

		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>		

		<style>
			
		</style>

	</head>

	<body>
		<div data-role="page" id="awards_page" style="background-image: url(images/awards/backgroundpng1.png); object-fit: scale-down;">
			<!-- Header -->
			<?php include("header.php"); ?>

			<div role="main" class="ui-content">
				
			</div>

			<div class="top" style="margin-top:50px; text-align: center;">
			<h2>Awards</h2>
			<h4>Find Your Current Points and Challenges</h4>
			<h1 id="points" style="color:#0174cf; font-size:60px; margin-top:-10px; margin-bottom:-10px;">100</h1>
			<h2>Points</h2>
			</div>

			<!-- <div class="mainBox" id="mainBox">
				<img src="images/awards/background_image.png" alt="backgroung_image" width="1004" height="456.800" >
			</div> -->
			<div class="mainBox" id="mainBox">
				<div class="challenges" id="mainBoxItem">
					<img src="images/awards/challenges.png" alt="" width = "393px" height = "350px" >
				</div>
				<div class="badges" id="mainBoxItem">
					<img src="images/awards/badges.png" alt="" width = "393px" height = "350px">
				</div>
			</div>



			<?php include("footer.php"); ?>
			<?php include("navigation_bar.php"); ?>
		</div>
		<script type="text/javascript" src="js/awards.js"></script>
	</body>
</html>