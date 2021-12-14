<!DOCTYPE html>
<html>
	<head>
		<!-- Common -->
		<meta charset="utf-8">
		<title>Destination</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
		<link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
		<link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />

		<!-- The three things that jQuery Mobile needs to work -->
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

		<!-- Custom -->
		<script src="js/destination.js"></script>

	</head>

	<body>
		<div data-role="page" id="destination_page">
			<!-- Header -->
			<?php include("header.php"); ?>

			<div style="margin-top: 60px; height: auto; padding: 0px; text-align: center;">
                <div style="background:white; padding: 16px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px;" >
                    <h2 style="margin-top: 6px; margin-bottom:2px">Treasure Hunt</h2>
                    <p style="margin-top:2px; margin-bottom:24px">Find locations to hunt and learn more</p>
                    <div class="game_search">
                        <div class="game_search_box" >
                            <input type="search" data-clear-btn="false" name="game-search-box">
                        </div>
                    </div>
                </div>
                
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.68056342787!2d-0.1268140842631077!3d51.50072917963407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c38c8cd1d9%3A0xb78f2474b9a45aa9!2sBig%20Ben!5e0!3m2!1sen!2sus!4v1639405031679!5m2!1sen!2sus" style="width: 100%; margin-top: -15px; height: 320px">
                </iframe>
                <div style="height: 234px; background:white; margin-top:-15px; padding: 16px; border-top-right-radius: 12px; border-top-left-radius: 12px; text-align: left;">
                    <h3 style="margin-top: 6px; margin-bottom:2px">Big Ben Tower</h3>
                    <p style="margin-top:2px; margin-bottom:16px">Wodne ened aehf</p>
                    <p>wdwdw</p>
                    <p>wdwdw</p>
                    <button style="width:120px; background:#0174cf; color: white; float: right;">Play Game</button>
                </div>
			</div>
			<?php include("footer.php"); ?>
			<?php include("navigation_bar.php"); ?>
		</div>
	</body>
</html>