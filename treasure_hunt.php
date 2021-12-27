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
            .game_search_box {
                border-style: solid;
                border-radius: 12px;
                border-width: thin;
                margin-top: 24px;
                margin-bottom: 2px;
                padding: 2px;
            }
            
            .game_search_box a {
                margin: 0px !important; 
                border-radius: 12px !important;
            }
            
            .game_search_box .ui-input-search {
                height: 26px !important;
                margin-top: 14px !important;
                margin-bottom: 4px !important;
            }
            
            .game_search_box input {
                min-height: 26px !important;
                padding: 1px 8px 1px 14px !important;
            }
            
            .game_search_box .ui-input-text {
                border: none !important;
                box-shadow: none !important;
                margin: 0px;
            }
            
			/* Always set the map height explicitly to define the size of the div
				* element that contains the map. */
			#treasure_hunt_page #map {
				height: 395px;
			}

/*
            #treasure_hunt_page #treasure_hunt_map_space{
                height: 390px;
            }
*/
            @media only screen 
                and (min-device-height: 375px) and (max-device-height: 700px) {
                    #treasure_hunt_page #map {
				        float: right;
                        width: 60%;
                        height: 254px;
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
                        margin-top: 12px;
                        margin-bottom: 4px;
                    }

                }
            @media only screen 
                and (min-device-height: 768px) {
                    #treasure_hunt_page #map {
				        height: 360px;
			         }

                }
            
            @media only screen 
                and (min-device-height: 812px) {
                    #treasure_hunt_page #map {
				        height: 408px;
			         }

                }
            
            @media only screen 
                and (min-device-height: 1024px) {
                    #treasure_hunt_page #map {
				        height: 608px;
			         }

                }

		</style>

	</head>

	<body>
		<div data-role="page" id="treasure_hunt_page">
			<!-- Header -->
            <?php include("navigation_bar.php"); ?>
			<?php include("header.php"); ?>
			<div style="margin-top: 60px; height: auto; padding: 0px; text-align: center;">
                <div style="background:white; padding: 16px 16px 12px 16px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px;" id="search_section">
                    <h2 style="margin-top: 6px; margin-bottom:2px">Treasure Hunt</h2>
                    <p2 style="margin-top:2px; margin-bottom:24px">Find locations to hunt and learn more</p2>
                    <div class="game_search">
                        <div class="game_search_box" style="display: inline-grid; width: 85% !important; grid-template-columns: auto 40px;" >
                            <input type="text" data-clear-btn="false" name="game-search-box">
                            <a class="ui-alt-icon ui-btn ui-btn-icon-right ui-icon-search" style="width: 40px; padding: 0px;"></a>
                        </div>
                    </div>
                </div>
                
                <div id="treasure_hunt_map_space">
                    <div id="map">
                    </div>
                </div>
                <div id="location_section" style="height: 124px; background:white; margin-top:-15px; padding: 16px; border-top-right-radius: 12px; border-top-left-radius: 12px; text-align: left; z-index: 99; position: relative;">
                    <h3 style="margin-top: 6px; margin-bottom:2px" id="treasure_hunt_selected_name">London's Big Ben</h3>
                    <p style="margin-top:4px; margin-bottom:16px" id="treasure_hunt_selected_details">London's iconic national timepiece</p>
                    <div style="display: grid; justify-content: space-between; grid-template-columns: auto auto;">
                        <p style="margin-top:2px; margin-bottom:2px">Walk 1 h</p>
                        <p style="color: #0174cf; margin-top:24px; margin-bottom: 2px; position: absolute;">Open now</p>
                        <button style="width:120px; background:#0174cf; color: white;">Play Game</button>
                    </div>
                </div>
			</div>
<!--			<?php include("footer.php"); ?>-->
		</div>
	</body>
</html>