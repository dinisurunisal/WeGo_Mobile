<style>
    <?php include_once("jquery-theme/themes/theme.css"); include_once("css/style.css");?>
</style>

<script src="js/destination_search.js"></script>

<div id="home_header">
    <div data-role="collapsible" class="ui-nodisc-icon ui-alt-icon" id="header_collapsible"
        data-collapsed-icon="search" data-expanded-icon="carat-u" data-iconpos="left">
        <legend id="home_header_content">
            <div id="home_header_logo">
                <img id="logo_image" src="images/HeaderLogo.png" alt="WeGo logo"/>
            </div>
            <div id="home_header_profile_icon">
                <!-- <img class="profile_image" src="images/profile_page/profile_image.jpeg" alt="profile"/> -->
            </div>
        </legend>
        <div class="header_search">
            <div class="header_search_box" >
                <input type="search" data-clear-btn="false" name="header-search-box" id="destination-search-input">
            </div>
            <div class="header_search_btn">
                <button id="home_search_btn" onclick="onSearchBtnClick()">Search</button>
            </div>
        </div>
    </div>
    <div>
        <div id="profile_link" onclick="window.location.href='profile.php'">
            <img id="profile_image" alt="profile"/>
        </div>
    </div> 

    <?php include("success_popups.php"); ?>
</div>

