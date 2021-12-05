<style>
<?php
include_once("jquery-theme/themes/navbar_styles.css");
    include_once("jquery-theme/themes/theme.css");
?>
</style>

<div id="navbar" data-role="footer" data-tap-toggle="false">
    <div data-role='navbar' data-tap-toggle="false" class="nav-bar" style="overflow: hidden;">
        <ul>
            <li>
                <a href="homepage.php" data-ajax="false" id="navHome" class="nav-bar-item">
                    <img class="navBarIcon" src="images/icons/homeIcon.png" alt="home"/>
                    <h4 class="nav-bar-item-option">HOME</h4>
                </a>
            </li>
            <li>
                <a href="my_hunts.php" data-ajax="false" id="navHunts" rel="dialog" class="nav-bar-item">
                    <img class="navBarIcon" src="images/icons/huntsIcon.png" alt="hunts"/>
                    <h4 class="nav-bar-item-option">HUNTS</h4>
                </a>
            </li>
            <li>
                <a href="treasure_hunt.php" data-ajax="false" id="navGame" class="nav-bar-item">
                    <img class="navBarIcon" src="images/icons/gameIcon.png" alt="game"/>
                    <h4 class="nav-bar-item-option">GAME</h4>
                </a>
            </li>
            <li>
                <a id="navAwards" href="awards.php" data-ajax="false" class="nav-bar-item">
                    <img class="navBarIcon" src="images/icons/awardsIcon.png" alt="awards"/>
                    <h4 class="nav-bar-item-option">AWARDS</h4>
                </a>
            </li>
        </ul>
    </div>
</div>