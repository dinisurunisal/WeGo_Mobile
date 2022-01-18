<style>
<?php
    include_once("css/style.css"); include_once("jquery-theme/themes/theme.css");?>
</style>

<script src="js/navigation_bar.js"></script>

<div id="nav_bar" data-role="footer" data-tap-toggle="false">
    <div data-role='navbar' data-tap-toggle="false" class="nav-bar" style="overflow: hidden;">
        <ul>
            <li>
                <a onclick="selectHome()" href="homepage.php" data-ajax="false" id="nav_home" class="nav_bar_item">
                    <svg id="home_icon" class="nav_bar_icon">
                        <use href="images/icons/homeIcon.svg#home_icon"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a onclick="selectHunts()" href="my_hunts.php" data-ajax="false" id="nav_hunts" rel="dialog" class="nav_bar_item">
                    <svg id="hunts_icon" class="nav_bar_icon">
                        <use href="images/icons/huntsIcon.svg#hunts_icon"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a onclick="selectGame()" href="treasure_hunt.php" data-ajax="false" id="nav_game" class="nav_bar_item">
                    <svg id="game_icon" class="nav_bar_icon">
                        <use href="images/icons/gameIcon.svg#game_icon"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a onclick="selectAwards()" id="nav_awards" href="awards.php" data-ajax="false" class="nav_bar_item">
                    <svg id="awards_icon" class="nav_bar_icon">
                        <use href="images/icons/awardsIcon.svg#awards_icon"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</div>