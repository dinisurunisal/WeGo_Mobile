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

		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="js/treasure_hunt.js"></script>

        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTaSledUuIuOU0iipt8JzdHB2J-ZJayr4&callback=initMap" ></script>

        <style>
            @media only screen 
                and (min-device-height: 375px) 
                and (max-device-height: 700px) {
                    #treasure_hunt_page #map {
				        float: right;
                        width: 60%;
                        height: 254px !important;
			         }

                    #treasure_hunt_page #search_section {
                        border-radius: 0px !important;
                        padding: 2px 16px 12px 16px !important;
				        float: left;
                        width: 36%;
			         }

                    #treasure_hunt_page #location_section {
                        padding: 12px 16px 14px 16px !important;
				        float: left;
                        width: 36%;
                        
			         }
                    
                    #treasure_hunt_page .game_search_box {
                        margin-top: 12px !important;
                        margin-bottom: 4px !important;
                    }

                }
            @media only screen 
                and (min-device-height: 700px) {
                    #treasure_hunt_page #map {
				        height: 360px !important;
			         }

                }
            
            @media only screen 
                and (min-device-height: 812px) {
                    #treasure_hunt_page #map {
				        height: 408px !important;
			         }

                }
            
            @media only screen 
                and (min-device-height: 1024px) {
                    #treasure_hunt_page #map {
				        height: 608px !important;
			         }
                }
		</style>
	</head>

	<body>
		<div data-role="page" id="treasure_hunt_page">
			<!-- Header -->
            <?php include("navigation_bar.php"); ?>
			<?php include("header.php"); ?>
			<div id="treasure_hunt_content">
                <div id="search_section"> 
                    <h2>Treasure Hunt</h2>
                    <p2>Find locations to hunt and learn more</p2>
                    <div class="game_search">
                        <div class="game_search_box">
                            <input type="text" data-clear-btn="false" name="game-search-box">
                            <a class="ui-alt-icon ui-btn ui-btn-icon-right ui-icon-search"></a>
                        </div>
                    </div>
                </div>
                
                <div id="treasure_hunt_map_space">
                    <div id="map">
                    </div>
                </div>
                <div id="location_section">
                    <h3 id="treasure_hunt_selected_name">London's Big Ben</h3>
                    <p id="treasure_hunt_selected_details">London's iconic national timepiece</p>
                    <div>
                        <p id="treasure_hunt_duration" style="margin-top:2px; margin-bottom:2px">Walk 1 h</p>
                        <p id="treasure_hunt_status">Open now</p>
                        <button id="game_button" onclick="window.location.href='treasure_hunt_game.php'">Play Game</button>
                    </div>
                </div>
			</div>
			<!-- <?php include("footer.php"); ?> -->
		</div>
	</body>
</html>