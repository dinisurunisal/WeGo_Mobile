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
		<script src="js/game_puzzle.js"></script>
        <style>

            @media only screen 
                and (max-device-width: 400px) {

                    #treasure_hunt_game_page .game_name {
                        position: absolute;
                        top: 11vh;
                    }

                    #treasure_hunt_game_page .game_content {
                        align-content: flex-end;
                    }

                    #treasure_hunt_game_page .game_content #game_info {
                        height: 62vw !important;
                    }

                }
            
            @media only screen 
                and (min-device-width: 700px) {
                    #treasure_hunt_game_page .game_content {
                        justify-content: space-evenly; 
                        grid-template-columns: auto auto;
                    }

                    #treasure_hunt_game_page .game_name {
                        margin-top: -10px;
                    }

                    #treasure_hunt_game_page .game_content #game_area, #game_info {
                        width: 36vw;
                        height: 36vw;
                    }

                    #treasure_hunt_game_page #game_area div {
                        width:36vw;
                        height: 36vw;
                    }

                    #treasure_hunt_game_page #game_info h1 {
                        margin-top: 20px !important;
                    }
                }

            @media only screen 
                and (max-device-width: 700px) {
                    #treasure_hunt_game_page #game_area {
                        padding-top: 16px !important;
                    }

                    #treasure_hunt_game_page #game_area div {
                        width: 70vw;
                        height: 70vw;
                    }
                }
        </style>
	</head>

	<body>
		<div data-role="page" id="treasure_hunt_game_page">
			<div role="main" class="game_content">
                <div id="game_area">
                    <table cellpadding=0 cellspacing=0 style="height: fit-content; width: fit-content; text-align: center; color: white;">
                        <tr>
                            <td class="img_box" id="box1" onclick="boxClick(this.id)"></td>
                            <td class="img_box" id="box2" onclick="boxClick(this.id)"></td>
                            <td class="img_box" id="box3" onclick="boxClick(this.id)"></td>
                        </tr>
                        <tr>
                            <td class="img_box" id="box4" onclick="boxClick(this.id)"></td>
                            <td class="img_box" id="box5" onclick="boxClick(this.id)"></td>
                            <td class="img_box" id="box6" onclick="boxClick(this.id)"></td>
                        </tr>
                        <tr>
                            <td class="img_box" id="box7" onclick="boxClick(this.id)"></td>
                            <td class="img_box" id="box8" onclick="boxClick(this.id)"></td>
                            <td class="img_box" id="box9" onclick="boxClick(this.id)"></td>
                        </tr>
                    </table>
                </div>
                <div id="game_info">
                    <img class="game_name" src="images/game/gameHeading.png">
                    <h1>Did you know?</h1>
                    <p>The Big Ben cracked on 1859 few months after it first rung. A new lighter hammer was fitted soon after.</p>
                    <div>
                        <button onclick="history.back()" class="game_exit_btn">Exit</button>
                    </div>
                </div>
			</div>
            <?php include("success_popups.php"); ?>
		</div>
	</body>
</html>