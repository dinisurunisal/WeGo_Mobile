<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>WeGo</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/my_hunts_styles.css" />
        
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="js/my_hunts.js"></script>
        
        <style>
            #scan_qr_section {
                width: -webkit-fill-available;
                background-color: white;
                border-radius: 12px;
                display: grid;
                grid-template-columns: auto auto;
                height: fit-content;
                position: fixed;
                bottom: 68px;
                box-shadow: #c4c4c4 0px 1px 12px;
                padding: 12px;
                align-items: flex-end;
                justify-content: space-between;
                margin: 0px 12px;
                z-index: 199;
            }

            #scan_qr_section .scan_instructions {
                padding: 12px;
            }

            #scan_qr_section p {
                margin: 0px 0px 8px 0px !important;
                font-weight: bold;
            }

            #scan_qr_section p2{
                margin: 0px !important;
            }

            #scan_qr_section button{
                margin: 0px !important;
                width: 98px;
                color: white;
                background-color: #0174cf;
                text-shadow: none;
            }

            @media only screen 
                    and (max-device-height: 570px) {
                        #scan_qr_section .scan_instructions p2{
                            display: none !important;
                        }

                        #scan_qr_section {
                            width: fit-content !important;
                            top: 68px !important;
                            right: 10px !important;
                            padding: 8px 12px 8px 0px !important;
                            align-items: center !important;
                        }

                        
                        #scan_qr_section p {
                            margin: 0px !important;
                        }
                    }

        </style>
    </head>

    <body>
        <div data-role="page" id="my-hunts-page">
            <?php include("header.php"); ?>
            <div id="my_hunts_content" style="margin-top: 60px; padding: 16px; text-align: center; display: flow-root; margin-bottom: 32vh;">
                <h2 style="margin-top: 6px; margin-bottom:2px">My Hunts</h2>
                <p style="margin-top:2px; margin-bottom:24px">Find your past and upcoming hunts</p>
                <div data-role="navbar" class="toggle">
                    <ul>
                        <li><a id="past-hunts-btn" href="#" class="toggle-buttons ui-btn-active" onclick="selectPastHunts()">Past Hunts</a></li>
                        <li><a id="upcoming-hunts-btn" class="toggle-buttons" href="#" onclick="selectUpcomingHunts()">Upcoming Hunts</a></li>
                    </ul>
                </div><!-- /navbar -->
 
                <div id="upcoming-empty">
                    <ul id="temp" data-icon="false" style="list-style-type: none; margin: 0; padding: 0">
                        <div class="my_hunts_list" id="upcoming_my_hunts_list">
                            <div id="my_hunt_resolution_breakdown">
                                <li>
                                    <div class="my_hunts_card" onclick="onDestinationSelect(this.id)">
                                        <div class="card_image_section">
                                            <img src="images/destinations/Big Ben.jpg" id="upcoming_hunt_card_image">
                                        </div>
                                        <div class="my_hunts_card_content">
                                            <h3 class="my_hunts_location_name" id="upcoming_my_hunts_location_name">Big Ben</h3>
                                            <p2 class="my_hunts_tour_date" id="upcoming_my_hunts_tour_date">Tour starts on 20th December 2021</p2>
                                            <hr>
                                            <div class="my_hunts_upcoming_details">
                                                <p2>Route:</p2>
                                                <p2 class="upcoming_tour_route" id="upcoming_tour_route">London - Burmingham</p2>
                                                <p2>Duration:</p2>
                                                <p2 class="upcoming_tour_duration" id="upcoming_tour_duration">2h 15m</p2>
                                                <p2>Passengers:</p2>
                                                <p2 class="upcoming_tour_passengers" id="upcoming_tour_passengers">4 Adults</p2>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>

                        <div id="upcoming_my_hunts_list_2"></div>
                    </ul>

    <!--                <h4 style="text-align: center;">Book locations to add them to your upcoming hunts.</h4>-->
                </div>
                <div id="past-empty">
                    <ul id="temp" data-icon="false" style="list-style-type: none; margin: 0; padding: 0">
                        <div class="my_hunts_list" id="past_my_hunts_list">
                            <div id="my_hunt_resolution_breakdown">
                                <li>
                                    <div class="my_hunts_card">
                                        <div class="card_image_section">
                                            <img src="images/destinations/Big Ben.jpg" id="past_hunt_card_image">
                                        </div>
                                        <div class="my_hunts_card_content">
                                            <h3 class="my_hunts_location_name" id="past_my_hunts_location_name">Big Ben</h3>
                                            <p2 class="my_hunts_tour_date" id="past_my_hunts_tour_date">Tour completed on 25-12-2021</p2>
                                            <hr>
                                            <p2 class="my_hunts_tour_details" id="past_my_hunts_tour_details">EUS - DEL | 1h 11m | One Way</p2>
                                            <div class="button_space" id="button_space">
                                                <a href="#my_hunts_feedback" data-rel="popup" data-transition="pop" data-position-to="window">
                                                    <button class="feedback_btn">Leave feedback</button>
                                                </a>  
                                            </div>
                                            <div id="tour_star_holder" class="tour_star_holder">
                                                <i id="tour_star_rating_one" class="material-icons" style="font-size: 22px; color:red">star_border</i>
                                                <i id="tour_star_rating_two" class="material-icons" style="font-size: 22px; color:red">star_border</i>
                                                <i id="tour_star_rating_three" class="material-icons" style="font-size: 22px; color:red">star_border</i>
                                                <i id="tour_star_rating_four" class="material-icons" style="font-size: 22px; color:red">star_border</i>
                                                <i id="tour_star_rating_five" class="material-icons" style="font-size: 22px; color:red">star_border</i>
                                                <p2 id="tour_rating">4 Stars</p2>
                                            </div>
                                            <p2 class="tour_review" id="tour_review">
                                                One of the best destinations which admires the history of UK
                                            </p2>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>

                        <div id="past_my_hunts_list_2"></div>
                    </ul>
    <!--                <h4 style="text-align: center; ">No locations hunted yet.</h4>-->
                </div>
                <!-- <a href="#my_hunts_feedback" data-rel="popup" data-transition="pop" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-position-to="window">Feedback</a> -->
                <?php include("my_hunts_feedback.php")?>
            </div>
            <div id="scan_qr_section">
                <div class="scan_instructions">
                    <p>Add New Hunt</p>
                    <p2>Found a hunt not in upcoming list? add the hunt to your hunts list</p2>
                </div>
                <div>
                    <button onclick="window.location.href='my_hunts_scan.php'">Scan QR</button>
                </div>
            </div>
            <?php include("footer.php"); ?>
            <?php include("navigation_bar.php"); ?>
            <?php include("success_popups.php"); ?>
        </div>
    </body>
</html>