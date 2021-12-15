<style>
<?php
include_once("css/navbar_styles.css");
    include_once("jquery-theme/themes/theme.css");
?>
</style>

<script>
    window.onload = function() {
        if(window.location.pathname.endsWith("homepage.php")){
            selectHome();
        } else if (window.location.pathname.endsWith("my_hunts.php")) {
            selectHunts();
        } else if (window.location.pathname.endsWith("treasure_hunt.php")) {
            selectGame();
        } else if (window.location.pathname.endsWith("awards.php")){
            selectAwards();
        } else {
            document.getElementById("navHome").style.color = "#c4c4c4";
            document.getElementById("navHunts").style.color = "#c4c4c4";
            document.getElementById("navGame").style.color = "#c4c4c4";
            document.getElementById("navAwards").style.color = "#c4c4c4";
        }
    };
    
    function selectHome() {
      document.getElementById("homeImg").src = "images/icons/homeIconSelected.png";
      document.getElementById("navHome").style.color = "#0174cf";
        document.getElementById("navHunts").style.color = "#c4c4c4";
        document.getElementById("navGame").style.color = "#c4c4c4";
        document.getElementById("navAwards").style.color = "#c4c4c4";
    }

    function selectHunts() {
      document.getElementById("huntsImg").src = "images/icons/huntsIconSelected.png";
        document.getElementById("navHome").style.color = "#c4c4c4";
        document.getElementById("navHunts").style.color = "#0174cf";
        document.getElementById("navGame").style.color = "#c4c4c4";
        document.getElementById("navAwards").style.color = "#c4c4c4";
    }

    function selectGame() {
      document.getElementById("gameImg").src = "images/icons/gameIconSelected.png";
        document.getElementById("navHome").style.color = "#c4c4c4";
        document.getElementById("navHunts").style.color = "#c4c4c4";
        document.getElementById("navGame").style.color = "#0174cf";
        document.getElementById("navAwards").style.color = "#c4c4c4";
    }

    function selectAwards() {
      document.getElementById("awardsImg").src = "images/icons/awardsIconSelected.png";
        document.getElementById("navHome").style.color = "#c4c4c4";
        document.getElementById("navHunts").style.color = "#c4c4c4";
        document.getElementById("navGame").style.color = "#c4c4c4";
        document.getElementById("navAwards").style.color = "#0174cf";
    }
</script>

<div id="navbar" data-role="footer" data-tap-toggle="false">
    <div data-role='navbar' data-tap-toggle="false" class="nav-bar" style="overflow: hidden;">
        <ul>
            <li>
                <a onclick="selectHome()" href="homepage.php" data-ajax="false" id="navHome" class="nav-bar-item">
                    <img id="homeImg" class="navBarIcon" src="images/icons/homeIcon.png" alt="home"/>
                    <h4 class="nav-bar-item-option">HOME</h4>
                </a>
            </li>
            <li>
                <a onclick="selectHunts()" href="my_hunts.php" data-ajax="false" id="navHunts" rel="dialog" class="nav-bar-item">
                    <img id="huntsImg" class="navBarIcon" src="images/icons/huntsIcon.png" alt="hunts"/>
                    <h4 class="nav-bar-item-option">HUNTS</h4>
                </a>
            </li>
            <li>
                <a onclick="selectGame()" href="treasure_hunt.php" data-ajax="false" id="navGame" class="nav-bar-item">
                    <img id="gameImg" class="navBarIcon" src="images/icons/gameIcon.png" alt="game"/>
                    <h4 class="nav-bar-item-option">GAME</h4>
                </a>
            </li>
            <li>
                <a onclick="selectAwards()" id="navAwards" href="awards.php" data-ajax="false" class="nav-bar-item">
                    <img id="awardsImg" class="navBarIcon" src="images/icons/awardsIcon.png" alt="awards"/>
                    <h4 class="nav-bar-item-option">AWARDS</h4>
                </a>
            </li>
        </ul>
    </div>
</div>