<style>
<?php
    include_once("css/style.css"); include_once("jquery-theme/themes/theme.css");?>
</style>

<script>
    // window.onload = function() {
    //     if(window.location.pathname.endsWith("homepage.php")){
    //         selectHome();
    //     } else if (window.location.pathname.endsWith("my_hunts.php")) {
    //         selectHunts();
    //     } else if (window.location.pathname.endsWith("treasure_hunt.php")) {
    //         selectGame();
    //     } else if (window.location.pathname.endsWith("awards.php")){
    //         selectAwards();
    //     } else {
    //         document.getElementById("nav_home").style.color = "#c4c4c4";
    //         document.getElementById("nav_hunts").style.color = "#c4c4c4";
    //         document.getElementById("nav_game").style.color = "#c4c4c4";
    //         document.getElementById("nav_awards").style.color = "#c4c4c4";
    //     }
    // };
    
    // function selectHome() {
    //   document.getElementById("home_img").src = "images/icons/homeIconSelected.png";
    //   document.getElementById("nav_home").style.color = "#0174cf";
    //     document.getElementById("nav_hunts").style.color = "#c4c4c4";
    //     document.getElementById("nav_game").style.color = "#c4c4c4";
    //     document.getElementById("nav_awards").style.color = "#c4c4c4";
    // }

    // function selectHunts() {
    //   document.getElementById("hunts_img").src = "images/icons/huntsIconSelected.png";
    //     document.getElementById("nav_home").style.color = "#c4c4c4";
    //     document.getElementById("nav_hunts").style.color = "#0174cf";
    //     document.getElementById("nav_game").style.color = "#c4c4c4";
    //     document.getElementById("nav_awards").style.color = "#c4c4c4";
    // }

    // function selectGame() {
    //   document.getElementById("game_img").src = "images/icons/gameIconSelected.png";
    //     document.getElementById("nav_home").style.color = "#c4c4c4";
    //     document.getElementById("nav_hunts").style.color = "#c4c4c4";
    //     document.getElementById("nav_game").style.color = "#0174cf";
    //     document.getElementById("nav_awards").style.color = "#c4c4c4";
    // }

    // function selectAwards() {
    //   document.getElementById("awards_img").src = "images/icons/awardsIconSelected.png";
    //     document.getElementById("nav_home").style.color = "#c4c4c4";
    //     document.getElementById("nav_hunts").style.color = "#c4c4c4";
    //     document.getElementById("nav_game").style.color = "#c4c4c4";
    //     document.getElementById("nav_awards").style.color = "#0174cf";
    // }
</script>
<script src="js/navigation_bar.js"></script>

<div id="nav_bar" data-role="footer" data-tap-toggle="false">
    <div data-role='navbar' data-tap-toggle="false" class="nav-bar" style="overflow: hidden;">
        <ul>
            <li>
                <a onclick="selectHome()" href="homepage.php" data-ajax="false" id="nav_home" class="nav_bar_item">
                    <svg id="home_icon" class="nav_bar_icon">
                        <use href="images/icons/homeIcon.svg#home_icon"></use>
                    </svg>
                    <!-- <img id="home_img" class="nav_bar_icon" src="images/icons/homeIcon.svg" alt="home"/>
                    <h4 class="nav_bar_item_option">HOME</h4> -->
                </a>
            </li>
            <li>
                <a onclick="selectHunts()" href="my_hunts.php" data-ajax="false" id="nav_hunts" rel="dialog" class="nav_bar_item">
                    <svg id="hunts_icon" class="nav_bar_icon">
                        <use href="images/icons/huntsIcon.svg#hunts_icon"></use>
                    </svg>
                    <!-- <img id="hunts_img" class="nav_bar_icon" src="images/icons/huntsIcon.png" alt="hunts"/>
                    <h4 class="nav_bar_item_option">HUNTS</h4> -->
                </a>
            </li>
            <li>
                <a onclick="selectGame()" href="treasure_hunt.php" data-ajax="false" id="nav_game" class="nav_bar_item">
                    <svg id="game_icon" class="nav_bar_icon">
                        <use href="images/icons/gameIcon.svg#game_icon"></use>
                    </svg>
                    <!-- <img id="game_img" class="nav_bar_icon" src="images/icons/gameIcon.png" alt="game"/>
                    <h4 class="nav_bar_item_option">GAME</h4> -->
                </a>
            </li>
            <li>
                <a onclick="selectAwards()" id="nav_awards" href="awards.php" data-ajax="false" class="nav_bar_item">
                    <svg id="awards_icon" class="nav_bar_icon">
                        <use href="images/icons/awardsIcon.svg#awards_icon"></use>
                    </svg>
                    <!-- <img id="awards_img" class="nav_bar_icon" src="images/icons/awardsIcon.png" alt="awards"/>
                    <h4 class="nav_bar_item_option">AWARDS</h4> -->
                </a>
            </li>
        </ul>
    </div>
</div>