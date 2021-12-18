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
            #treasure_hunt_page {
                background-image:url(images/game/gameBackground.png);
                background-position: center;
                background-size: cover;
                padding: 24px;
                text-align: center;
            }
            
            .game_content {
                text-align: center;
            }
            
/*
            .ui-btn {
                width: fit-content;
            }
            
*/
            .game_exit_btn {
                width: 100px !important;
            }
            
        </style>

	</head>

	<body>
		<div data-role="page" id="treasure_hunt_page">
			<!-- Header -->
			<div role="main" class="game_content">
			</div>
            <button onclick="history.back()" class="game_exit_btn">Exit</button>
		</div>
	</body>
</html>