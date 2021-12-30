<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Game</title>
		
		<link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
        <link rel="stylesheet" href="css/style.css" />

		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

		<!-- Custom -->
<!--		<script src="js/destination.js"></script>-->
        <style>
            #treasure_hunt_game_page {
                background-image:url(images/game/gameBackground.png);
                background-position: center;
                background-size: cover;
                height: 100%;
                text-align: center;
            }
            
            #treasure_hunt_game_page .game_name {
                width: 130px;
            }

            .game_content {
                height: -webkit-fill-available;
                display: grid; 
                grid-template-columns: auto;
                padding: 24px 24px 24px 24px;
                align-content: center;
            }

            .game_content #game_area, #game_info {
                text-align: -webkit-center;
                padding: 0px 24px 24px 24px;
                width: 75vw;
                height: 75vw;
            }
            

            #game_info h1, p {
                color: white;
                max-width: 280px;
            }
            

            .game_exit_btn {
                width: 70px !important;
            }
            
            @media only screen 
                and (min-device-width: 700px) {
                    .game_content {
                        justify-content: space-evenly; 
                        grid-template-columns: auto auto;
                    }

                    .game_content #game_area, #game_info {
                        width: 36vw;
                        height: 32vw;
                    }

                    #game_area div {
                        width:36vw;
                        height: 32vw;
                    }
                }

            @media only screen 
                and (max-device-width: 700px) {
                    #game_area {
                        padding-top: 16px !important;
                    }

                    #game_area div {
                        width: 70vw;
                        height: 70vw;
                    }
                }
        </style>

	</head>

	<body>
		<div data-role="page" id="treasure_hunt_game_page">
			<!-- Header -->
			<div role="main" class="game_content">
                <div style="height: 30px"></div>
                <div>
                    <img class="game_name" src="images/game/gameHeading.png">
                </div>
                <div id="game_area">
                    <div>
                        <img src="images/destinations/Big%20Ben.jpg" alt="game"  style="width: 100%; height: 100%;">
                    </div>
                </div>
                <div id="game_info">
                    <h1 style="margin-top: 8px">Did you know?</h1>
                    <p>The Big Ben cracked on 1859 few months after it first rung. A new lighter hammer was fitted soon after.</p>
                    <br>
                    <div>
                        <button onclick="history.back()" class="game_exit_btn">Exit</button>
                    </div>
                </div>
			</div>
		</div>
	</body>
</html>