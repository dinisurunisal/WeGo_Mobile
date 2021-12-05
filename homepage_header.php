<style>
<?php include_once("jquery-theme/themes/mb_styles_set_1.css");
include_once("jquery-theme/themes/home_header_styles.css");
?>
</style>

<script src="js/header_script.js"></script>

<div id="homeHeader">
    <div data-role="collapsible" class="ui-nodisc-icon ui-alt-icon" id="mb-header-collapsible"
        data-collapsed-icon="search" data-expanded-icon="carat-u" data-iconpos="left">
        <legend id="headerContent">
            <div id="headerLogo">
                <img id="logoImage" src="images/HeaderLogo.png" alt="WeGo logo"/>
            </div>
            <div id="profileIcon">
                <img id="profileImage" src="images/user.png" alt="profile"/>
            </div>
        </legend>
        <div class="header-search">
            <div id="mb-header-search-box" ><input type="search" data-clear-btn="false" name="mb-header-search-box">
            </div>
            <div>
            <button class="ui-btn" id="mb-header-search-button" onclick="headerSearchButtonFunction()">Search</button>
            </div>
        </div>
    </div>   
</div>

