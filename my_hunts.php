<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>WeGo</title>
        
        <link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/my_hunts_styles.css" />
        
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="js/my_hunts.js"></script>
        
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
                    <ul id="temp" data-icon="false" style="list-style-type: none; margin: 0; padding: 0">
                        <div class="my_hunts_list" id="upcoming_my_hunts_list">
                            <div id="my_hunt_resolution_breakdown">
                                <li>
                                    <div class="my_hunts_card">
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

                    <!-- <div class="my_hunts_list">
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
                    </div> -->
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
                                                <button class="feedback_btn">Leave feedback</button>
                                            </div>
                                            <div class="rating" id="rating">
                                                <img src="images/fourStars.png">
                                                <p2>4 Stars</p2>
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
                    <!-- <div class="my_hunts_list">
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
                    </div> -->
    <!--                <h4 style="text-align: center; ">No locations hunted yet.</h4>-->
                </div>
                <a href="#my_hunts_feedback" data-rel="popup" data-transition="pop" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-position-to="window">Feedback</a>

                <div data-role="popup" data-transition="pop" style="padding: 20px;" id="my_hunts_feedback" class="ui-content">
                    <form id="form" onsubmit="event.preventDefault(); submitFeedback()">
                        <h2>How was your experience?</h2>
                        <p2>Let us know what you think</p2>
    <!--                    <label class="labelform grey heading-five" for="password"> Rating </label>-->
    <!--
                        <div id="star_rating_holder">
                            <i id="star_rating_one" class="material-icons">
                                ui-icon-star
                            </i>
                            <i id="star_rating_two" class="material-icons">
                                ui-icon-star
                            </i>
                            <i id="star_rating_three" class="material-icons">
                                ui-icon-star
                            </i>
                            <i id="star_rating_four" class="material-icons">
                                ui-icon-star
                            </i>
                            <i id="star_rating_five" class="material-icons">
                                ui-icon-star
                            </i>
                        </div>
    -->
                        <img src="images/fourStars.png" style="width: 70%; padding: 8px 0 8px 0;">
                        <textarea type="text" required name="comment" id="form_comment" class="formField" placeholder="Enter your comment here"></textarea>
                        <div class="form_button_container">
                            <button data-rel="back" class="cancel_btn" data-rel="back">Cancel</button>
                            <button type="submit" class="submit_btn" data-role="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php include("footer.php"); ?>
            <?php include("navigation_bar.php"); ?>
        </div>
    </body>
</html>