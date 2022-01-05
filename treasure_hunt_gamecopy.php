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
            
            /* #collage hr{
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
            } */

            .game_exit_btn {
                width: 70px !important;
            }

            td {
                width: 80px;
                height: 80px;
            }

            td img {
                width: -webkit-fill-available;
                height: -webkit-fill-available;
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

	<body onkeydown="keyPressed(event)">
		<div data-role="page" id="treasure_hunt_game_page">
			<!-- Header -->
			<div role="main" class="game_content">
                <div style="height: 30px"></div>
                <div>
                    <img class="game_name" src="images/game/gameHeading.png">
                </div>
                <div id="game_area">
                    <div style="display:inline-block; margin:auto; width:100%; vertical-align:top;">
                        <!-- <ul id="sortable" class="sortable"></ul> -->
                        <table style="height: fit-content; width: fit-content; text-align: center; color: white;">
                            <tr>
                                <td id="box1" onclick="boxClick(this.id)"></td>
                                <td id="box2" onclick="boxClick(this.id)"></td>
                                <td id="box3" onclick="boxClick(this.id)"></td>
                            </tr>
                            <tr>
                                <td id="box4" onclick="boxClick(this.id)"></td>
                                <td id="box5" onclick="boxClick(this.id)"></td>
                                <td id="box6" onclick="boxClick(this.id)"></td>
                            </tr>
                            <tr>
                                <td id="box7" onclick="boxClick(this.id)"></td>
                                <td id="box8" onclick="boxClick(this.id)"></td>
                                <td id="box9" onclick="boxClick(this.id)"></td>
                            </tr>
                        </table>
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
            <?php include("success_popups.php"); ?>
		</div>
        <script>

            var g = [1,2,3,4,5,6,7,8,0];
            var l = [];
            var boxNames = [box1, box2, box3, box4, box5, box6, box7, box8, box9]

            var n = 0;

            do {
                ri = Math.floor(Math.random()*(g.length));
                r = g[ri];

                if(r!=-1) {
                    l.push(r);
                    g[ri] = -1;
                    n+=1;
                }

            } while(n<9);


            function drawPuzzle() {
                for(i=0;i<9;i++) {
                    document.getElementsByTagName('td')[i].innerHTML = '<img src="images/game/'+l[i]+'.jpg">';
                }
                chkWin();
            }

            function boxClick(id) {

                boxNumber = boxNames.indexOf(id) + 1;

                if(l.indexOf(0)==boxNumber + 3) {
                    mvDown();
                }

                if(l.indexOf(0)==boxNumber - 3) {
                    mvUp();
                }

                if(l.indexOf(0)==boxNumber + 1) {
                    mvRight();
                }

                if(l.indexOf(0)==boxNumber - 1) {
                    mvLeft();
                }

                // if(id=="td_1" & l.indexOf(0)==2) {
                //     mvDown();
                // }

                // if(id=="td_1" & l.indexOf(0)==1) {
                //     mvRight();
                // }
                
                // if(id=="td_2" & l.indexOf(0)==0) {
                //     mvLeft();
                // }
                
                // if(id=="td_2" & l.indexOf(0)==3) {
                //     mvDown();
                // }

                // if(id=="td_3" & l.indexOf(0)==0) {
                //     mvUp();
                // }
                
                // if(id=="td_3" & l.indexOf(0)==3) {
                //     mvRight();
                // }

                // if(id=="td_4" & l.indexOf(0)==2) {
                //     mvLeft();
                // }
                
                // if(id=="td_4" & l.indexOf(0)==1) {
                //     mvUp();
                // }
            }

            // function keyPressed(e) {
            //     k = e.keyCode;
            //     if(k==38) {mvUp();}
            //     if(k==40) {mvDown();}
            //     if(k==37) {mvLeft();}
            //     if(k==39) {mvRight();}
            // }

            function mvDown() {
                // if(l.indexOf(0)>1) {
                //     i = l.indexOf(0);
                //     j = i - 3;
                //     t = l[i];
                //     l[i] = l[j];
                //     l[j] = t;
                //     drawPuzzle();
                // }
                i = l.indexOf(0);
                j = i - 3;
                t = l[i];
                l[i] = l[j];
                l[j] = t;
                drawPuzzle();
            }
            function mvUp() {
                // if(l.indexOf(0)<2) {
                //     i = l.indexOf(0);
                //     j = i + 3;
                //     t = l[i];
                //     l[i] = l[j];
                //     l[j] = t;
                //     drawPuzzle();
                // }
                i = l.indexOf(0);
                j = i + 3;
                t = l[i];
                l[i] = l[j];
                l[j] = t;
                drawPuzzle();
            }
            function mvRight() {
                i = l.indexOf(0);
                // if(!(i==0 || i==2)) {
                //     j = i - 1;
                //     t = l[i];
                //     l[i] = l[j];
                //     l[j] = t;
                //     drawPuzzle();
                // }
                j = i - 1;
                t = l[i];
                l[i] = l[j];
                l[j] = t;
                drawPuzzle();
            }
            function mvLeft() {
                // i = l.indexOf(0);
                // if(!(i==1 || i==3)) {
                //     j = i + 1;
                //     t = l[i];
                //     l[i] = l[j];
                //     l[j] = t;
                //     drawPuzzle();
                // }
                i = l.indexOf(0);
                j = i + 1;
                t = l[i];
                l[i] = l[j];
                l[j] = t;
                drawPuzzle();
            }

            function chkWin() {
                var a = 1;
                for(i=0;i<8;i++) {
                    if(l[i]!=i+1) {a = 0;}
                }
                if(a==1) {showSuccess('You Won !');}
            }

            drawPuzzle();
        </script>
	</body>
</html>