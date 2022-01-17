<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
    <link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />

    <!-- The three things that jQuery Mobile needs to work -->
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <script type="text/javascript" src="js/homepage.js"></script>

    <style>
        @media only screen and (min-device-width: 375px) and (max-device-width: 667px) {
            .posters .carousel_button {
                border-radius: 50%;
                padding-left: 3%;
                padding-right: 6%;
            }

            .home .hp_heading {
                margin-top: 10%;
            }

            #thumbnail_list_small .thumbnail_content {
                height: 200px;
            }

        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 850px) {
            .posters .carousel_button {
                border-radius: 50%;
                padding-left: 3%;
                padding-right: 5%;
            }

            .home .hp_heading {
                margin-top: 3%;
            }

            #thumbnail_list_small {
                grid-template-columns: 20vw 20vw 20vw 20vw !important;
            }

            .carousel {
                height: 45vh;
            }
        }

        @media only screen and (min-device-width: 1024px) {
            .posters .carousel_button {
                border-radius: 50%;
                padding-left: 2%;
                padding-right: 3%;
            }

            .home .hp_heading {
                margin-top: 5%;
            }

            #thumbnail_list_small {
                grid-template-columns: 20vw 20vw 20vw 20vw !important;
            }

            .carousel {
                height: 40vh;
            }

        }
    </style>

</head>

<body>
    <div data-role="page" id="homePage">
        <?php include("homepage_header.php"); ?>
        <div class="home">
            <div class="posters">
                <div class="carousel">
                    <button class="carousel_button previous" id="c_previous" onclick="carouselMove(this.id)"> < </button>
                            <div class="carousel_images" style="transform: translateX(0vw);">
                                <img src="images/homepage/Iphone2.jpg" alt="">
                                <img src="images/homepage/Iphone1.jpg" alt="">
                            </div>
                    <button class="carousel_button next" id="c_next" onclick="carouselMove(this.id)"> > </button>
                </div>
            </div>

            <div>
                <div class="hp_heading">
                    <h1>
                        Welcome!
                    </h1>
                    <p2>
                        Find your destinations and hunt
                    </p2>
                </div>

                <div class="home_thumbnail_card">
                        <div class="row_one">
                            <h3>Destinations</h3>
                            <button onclick="window.location.href='destination_list.php'" id="see_all_btn" class="hp_button">See all</button>
                        </div>
                        <div id="thumbnail_list_small">
                            <div id="thumbnail_one" class="thumbnail_card">
                                <a id="clickedId" onclick="onDestinationSelect('destinationId1')">
                                    <div class="thumbnail_content">
                                        <img src="images/destinations/Big Ben.jpg" class="thumbnail_image" id="thumbnail_image_one">
                                        <h3 class="thumbnail_name" id="thumbnail_name_one">BIG BEN</h3>
                                    </div>
                                </a>
                            </div>

                            <div id="thumbnail_two" class="thumbnail_card">
                                <a id="clickedId" onclick="onDestinationSelect('destinationId2')">
                                    <div class="thumbnail_content">
                                        <img src="images/destinations/Cotswolds.jpg" class="thumbnail_image" id="thumbnail_image_two">
                                        <h3 class="thumbnail_name" id="thumbnail_name_two">COTSWOLDS</h3>
                                    </div>
                                </a>
                            </div>

                            <div id="thumbnail_three" class="thumbnail_card">
                                <a id="clickedId" onclick="onDestinationSelect('destinationId3')">
                                    <div class="thumbnail_content">
                                        <img src="images/destinations/York Minster.jpg" class="thumbnail_image" id="thumbnail_image_three">
                                        <h3 class="thumbnail_name" id="thumbnail_name_three">YORK MINSTER</h3>
                                    </div>
                                </a>
                            </div>

                            <div id="thumbnail_four" class="thumbnail_card">
                                <a id="clickedId" onclick="onDestinationSelect('destinationId4')">
                                    <div class="thumbnail_content">
                                        <img src="images/destinations/Buckingham Palace.jpg" class="thumbnail_image" id="thumbnail_image_four">
                                        <h3 class="thumbnail_name" id="thumbnail_name_four">BUCKINGHAM PALACE</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                </div>

                <div class="home_small_card">
                    <div class="card_info">
                        <h3 style="font-size: 20px;">Booking</h3>
                        <p>Book your train from here now</p>
                    </div>
                    <div class="card_btn">
                        <button onclick="window.location.href='booking.php'" class="hp_button">Book</button>
                    </div>
                </div>

                <div class="home_small_card">
                    <div class="card_info">
                        <h3 style="font-size: 20px;">Tresure hunt</h3>
                        <p>Play games to learn more about destinations and earn points</p>
                    </div>
                    <div class="card_btn">
                        <button onclick="window.location.href='treasure_hunt.php'" class="hp_button">Play</button>
                    </div>
                </div>
            </div>


        </div>
        <?php include("navigation_bar.php"); ?>
        <?php include("footer.php"); ?>
    </div>
</body>

</html