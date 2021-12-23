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
        .my_hunts_list {
            padding: 8px 0px 8px 0px!important;
            display: grid;
            grid-auto-columns: auto auto;
        }
        
        .my_hunts_card {
            background-image: url(images/destinations/Cotswolds.jpg);
            background-position: -180px 60%;
            background-size: cover;
            border-radius: 12px;
            height: auto;
            max-width: 100%;
            margin: 8px 4px 8px 4px;
        }
        
        .card_image_section {
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
            width: 35%;
            display: grid;
            float: left;
        }
        
        .card_image_section p, .button_space p2 {
            opacity: 0;
        }
/*
        .card_image_section img{
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
            width: 100%;
            height: auto;
            object-position: -180px;
            object-fit: cover;
        }
*/
        .tour_review {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
        }
        
        .my_hunts_card_content {
            background-color: white;
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
            display: grid;
            padding: 8px;
            text-align: left;
        }
        
        .my_hunts_card_content h3, p2 {
            width: fit-content;
            margin-top: 4px;
            margin-bottom: 4px;
        }
        
        .my_hunts_tour_date, .tour_review {
            color: #c4c4c4;
        }
        
        .my_hunts_upcoming_details {
            padding-top: 8px;
            display: grid;
            height: fit-content;
            grid-template-columns: auto auto;
            grid-column-gap: 10px;
        }
        
        .feedback_btn {
            width: 158px !important;
            background-color: #0174cf !important;
            color: white !important;
            text-shadow: none !important;
        }
        
        .rating {
            padding-top: 8px;
            display: grid;
            height: fit-content;
            grid-template-columns: 145px auto;
        }
        
        .button_space {
            padding-top: 8px;
            align-items: right;
            display: grid;
            grid-template-columns: auto auto;
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
                <div class="my_hunts_list">
                    <div class="my_hunts_card">
                        <div class="card_image_section">
                            <p>image</p>
                        </div>
                        <div class="my_hunts_card_content">
                            <h3 class="my_hunts_location_name">Big Ben</h3>
                            <p2 class="my_hunts_tour_date">Tour starts on 20th December 2021</p2>
                            <hr>
                            <div class="my_hunts_upcoming_details">
                                <p2>Route:</p2>
                                <p2 class="upcoming_tour_route">London - Burmingham</p2>
                                <p2>Duration:</p2>
                                <p2 class="upcoming_tour_duration">2h 15m</p2>
                                <p2>Passengers:</p2>
                                <p2 class="upcoming_tour_passengers">4 Adults</p2>
                            </div>
                        </div>
                    </div>
                    <div class="my_hunts_card">
                        <div class="card_image_section">
                            <p>image</p>
                        </div>
                        <div class="my_hunts_card_content">
                            <h3 class="my_hunts_location_name">Buckingham Palace</h3>
                            <p2 class="my_hunts_tour_date">Tour starts on 25th December 2021</p2>
                            <hr>
                            <div class="my_hunts_upcoming_details">
                                <p2>Route:</p2>
                                <p2 class="upcoming_tour_route">London - Westminster</p2>
                                <p2>Duration:</p2>
                                <p2 class="upcoming_tour_duration">2h 15m</p2>
                                <p2>Passengers:</p2>
                                <p2 class="upcoming_tour_passengers">4 Adults</p2>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <h4 style="text-align: center;">Book locations to add them to your upcoming hunts.</h4>-->
            </div>
            <div id="past-empty">
                <div class="my_hunts_list">
                    <div class="my_hunts_card">
                        <div class="card_image_section">
                            <p>image</p>
                        </div>
                        <div class="my_hunts_card_content">
                            <h3 class="my_hunts_location_name">Big Ben</h3>
                            <p2 class="my_hunts_tour_date">Tour completed on 25-12-2021</p2>
                            <hr>
                            <p2 class="my_hunts_tour_details">EUS - DEL | 1h 11m | One Way</p2>
                            <div class="button_space">
                                <p2>button</p2>
                                <button class="feedback_btn">Leave feedback</button>
                            </div>
                        </div>
                    </div>
                    <div class="my_hunts_card">
                        <div class="card_image_section">
                            <p>image</p>
                        </div>
                        <div class="my_hunts_card_content">
                            <h3 class="my_hunts_location_name">Big Ben</h3>
                            <p2 class="my_hunts_tour_date">Tour completed on 25-12-2021</p2>
                            <hr>
                            <p2 class="my_hunts_tour_details">EUS - DEL | 1h 11m | One Way</p2>
                            <div class="rating">
                                <img src="images/fourStars.png">
                                <p2>4 Stars</p2>
                            </div>
                            <p2 class="tour_review">One of the best destinations which admires the history of UK</p2>
                        </div>
                    </div>
                </div>
<!--                <h4 style="text-align: center; ">No locations hunted yet.</h4>-->
            </div>
        </div>
        <?php include("footer.php"); ?>
        <?php include("navigation_bar.php"); ?>
	</div>
</body>
</html