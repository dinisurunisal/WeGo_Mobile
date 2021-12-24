<!DOCTYPE html>
<html>
	<head>
		<!-- Common -->
		<meta charset="utf-8">
		<title>Treasure Hunt</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
		
		<link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
        <link rel="stylesheet" href="css/style.css" />
		<!-- The three things that jQuery Mobile needs to work -->
		

		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<!-- Custom -->
		<script src="js/treasure_hunt.js"></script>

        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTaSledUuIuOU0iipt8JzdHB2J-ZJayr4&callback=initMap" ></script>

        <style>
			/* Always set the map height explicitly to define the size of the div
				* element that contains the map. */
			#treasure_hunt_page #map {
				height: 500px;
			}

            #treasure_hunt_page #treasure_hunt_map_space{
                height: 495px;
            }

		</style>

	</head>

	<body>
		<div data-role="page" id="treasure_hunt_page">
			<!-- Header -->
            <?php include("navigation_bar.php"); ?>
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
                
                <div id="treasure_hunt_map_space">
                    <div id="map">
                    </div>
                </div>
                <div style="height: 234px; background:white; margin-top:-15px; padding: 16px; border-top-right-radius: 12px; border-top-left-radius: 12px; text-align: left; z-index: 99999; position: relative;">
                    <h3 style="margin-top: 6px; margin-bottom:2px" id="treasure_hunt_selected_name">London's Big Ben</h3>
                    <p style="margin-top:2px; margin-bottom:16px" id="treasure_hunt_selected_details">London's iconic national timepiece</p>
                    <p>wdwdw</p>
                    <p>wdwdw</p>
                    <button style="width:120px; background:#0174cf; color: white; float: right;">Play Game</button>
                </div>
			</div>
			<?php include("footer.php"); ?>
		</div>
	</body>
</html>