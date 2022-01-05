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
		<link rel="stylesheet" href="css/themes/common_themes.css" />
		<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />

		<!-- The three things that jQuery Mobile needs to work -->
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<!--
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
-->
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

		<!-- Custom -->
		

	</head>

	<body>
		<div data-role="page" id="destination_page">
			<!-- Header -->
			<?php include("header.php"); ?>

			<div role="main" class="ui-content">
				
			</div>

			<div class="top" style="margin-top:50px; text-align: center;">
			<h2>Awards</h2>
			<h4>Find Your Current Points and Challenges</h4>
			<h1 id="points">100</h1>
			<h2>Points</h2>
			</div>



			<?php include("footer.php"); ?>
			<?php include("navigation_bar.php"); ?>
		</div>
		<script type="text/javascript" src="js/awards.js"></script>
	</body>
</html>