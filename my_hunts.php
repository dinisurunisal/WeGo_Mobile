<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>WeGo</title>
    
    <link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="css/my_hunts_styles.css" />
    <link rel="stylesheet" href="jquery-theme/themes/theme.css" />
    <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript" src="js/my_hunts.js"></script>
    
    <style>
        .past_list {
            padding: 8px 0px 8px 0px!important;
            display: grid;
            grid-template: auto auto;
        }
        
        .past_card {
            background-color: white;
            border-radius: 12px;
            height: 265px;
            width: fit-content;
            margin: 8px 8px 8px 8px;
        }
        
        .card_image_section {
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
            width: 35%;
            display: grid;
            float: left;
        }
        
        .card_image_section img{
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
            width: 100%;
            height: 265px;
            object-position: -180px;
            object-fit: cover;
        }
        
        .past_card_content {
            display: grid;
            padding: 8px;
            text-align: left;
        }
        
        .past_card_content h3, p2 {
            width: fit-content;
            margin-top: 4px;
            margin-bottom: 4px;
        }
        .feedback_btn {
            width: 158px !important;
            background-color: #0174cf !important;
            color: white !important;
            text-shadow: none !important;
        }
    </style>
    
</head>

<body>
	<div data-role="page" id="my-hunts-page">
		<?php include("header.php"); ?>
        <div style="margin-top: 60px; height: 800px; padding: 16px; text-align: center;">
            <h2 style="margin-top: 6px; margin-bottom:2px">My Hunts</h2>
            <p style="margin-top:2px; margin-bottom:24px">Find your past and upcoming hunts</p>
            <div data-role="navbar" class="toggle">
                <ul>
                    <li><a id="past-hunts-btn" href="#" class="toggle-buttons ui-btn-active" onclick="selectPastHunts()">Past Hunts</a></li>
                    <li><a id="upcoming-hunts-btn" class="toggle-buttons" href="#" onclick="selectUpcomingHunts()">Upcoming Hunts</a></li>
                </ul>
            </div><!-- /navbar -->
<!--
        <ul id="past-order-inner-list" style="display:block" data-role="listview">
                <li style="margin-top: 10px; height: 60px; background: #00a99d;" class="past_order_card">
                    <div class="list-header center-outer-div">
                        <div class="center-inner-div">
                            <h3 class="bold heading-four white">Past Orders</h3>
                        </div>
                    </div>
                </li>
        </ul>
        <ul style="display:none;" id="upcoming-order-list" data-role="listview">
                <li style="margin-top: 10px; height: 60px; background: #00a99d;" class="past_order_card">
                    <div class="list-header center-outer-div">
                        <div class="center-inner-div">
                            <h3 class="bold heading-four white">Upcoming Orders</h3>
                        </div>
                    </div>
                </li>
        </ul>
-->     
            <div id="upcoming-empty">
                <h4 style="text-align: center;">Book locations to add them to your upcoming hunts.</h4>
            </div>
            <div id="past-empty">
                <div class="past_list">
                    
                    <div class="past_card">
                        <div class="card_image_section">
                            <img src="images/destinations/Big Ben.jpg" class="card_image">
                        </div>
                        <div class="past_card_content">
                            <h3 class="past_location_name">Big Ben</h3>
                            <p2 class="past_tour_date">Tour completed on 25-12-2021</p2>
                            <hr>
                            <h3 class="past_location_route">EUS - DEL</h3>
                            <h3 class="past_location_duration">Duration: 1h 11m</h3>
                            <h3 class="past_location_trip">One Way</h3>
                            <button class="feedback_btn">Leave feedback</button>
                        </div>
                    </div>

                    <div class="past_card">
                        <div class="card_image_section">
                            <img src="images/destinations/The%20British%20Museum.jpg" class="card_image">
                        </div>
                        <div class="past_card_content">
                            <h3 class="past_location_name">Big Ben</h3>
                            <p2 class="past_tour_date">Tour completed on 25-12-2021</p2>
                            <hr>
                            <h3 class="past_location_route">EUS - DEL</h3>
                            <h3 class="past_location_duration">Duration: 1h 11m</h3>
                            <h3 class="past_location_trip">One Way</h3>
                            <button class="feedback_btn">Leave feedback</button>
                        </div>
                    </div>
                </div>
                <h4 style="text-align: center; ">No locations hunted yet.</h4>
            </div>
        </div>
        <?php include("footer.php"); ?>
        <?php include("navigation_bar.php"); ?>
	</div>
</body>
</html