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

        <script src="http://code.jquery.com/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.8.17/jquery-ui.min.js"></script>
        <script src="jquery.ui.touch-punch.min.js"></script>

		<!-- Custom -->
		<script src="js/image_puzzle.js"></script>
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
            
            #collage hr{
                border:none;
                border-top:2px solid #f5f2f2;
                height:1px;
            }

            #collage #playPanel {
                background-color:#c2defc;
                padding:10px 0px;
                margin: 10px auto;
                max-width:800px;
                width:95%;
            }

            #collage #actualImageBox {
                display: inline-block;
                font-size:0.8em;
                margin: 10px 10px;
                vertical-align: top;
                width:280px;
            }

            #collage #stepBox, #collage #timeBox {
                display:inline-block;
                width:100%;
            }

            #collage #stepBox div {
                background-color:#c2defc;
                display:inline-block;
                padding:1px 4px;
                margin: 0px auto;
                max-width:800px;
            }

            #collage img#actualImage{
                border:2px solid #a46;
                height:280px;
                width:280px;
            }

            #collage #sortable {
                border:2px solid #a46;
                list-style-type: none;
                display: inline-block;
                margin: 10px;
                padding: 0;
                width: 400px;
            }

            #collage #sortable li {
                background-size: 400% 400%;
                border: none;
                cursor: pointer;
                margin: 0;
                padding: 0;
                float: left;
                width: 100px;
                height: 100px;
            }

            #collage button  {
                background-color:#f5f2f2;
                border:1px solid #cce;
                display: inline;
                font-size: 14px;
                height: auto;
                width: auto;
                padding: 3px 8px;
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
                    <div style="display:inline-block; margin:auto; width:100%; vertical-align:top;">
                        <ul id="sortable" class="sortable"></ul>
                        <!-- <table style="height: 100%; width: 100%; text-align: center; color: white;">
                            <tr>
                                <td></td><td></td><td></td>
                            </tr>
                            <tr>
                                <td></td><td></td><td></td>
                            </tr>
                            <tr>
                                <td></td><td></td><td></td>
                            </tr>
                            <tr>
                                <td></td><td></td><td></td>
                            </tr>
                        </table> -->
                        <!-- <img src="images/destinations/Big%20Ben.jpg" alt="game"  style="width: 100%; height: 100%;"> -->
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
        <script>
            // var l = [1, 2, 3, 4, 5, 6, 7, 8, 0];

            // function drawPuzzle() {
            //     for(i=0; i<9; i++) {
            //         document.getElementsByTagName('td')[i].innerHTML = l[i];
            //     }
            // }

            var images = [
                { src: 'images/destinations/Big%20Ben.jpg', title: 'Tigers Nest Temple, Bhutan' }
            ];

            $(function () {
                var gridSize = 3;
                imagePuzzle.startGame(images, gridSize);

                // $('#newPhoto').click(function () {
                //     imagePuzzle.startGame(images, gridSize);
                // });

                // $('#levelPanel :radio').change(function (e) {
                //     var gridSize = $(this).val();
                //     imagePuzzle.startGame(images, gridSize);
                // });
            });

            // function rules() {
            //     alert('Rearrange the pieces so that you get a sample image. \nThe steps taken are counted');
            // }
        </script>
	</body>
</html>