<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
        <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
        <link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />

        <!-- The three things that jQuery Mobile needs to work -->
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <!-- <script type="text/javascript" src="js/carousel.js"></script> -->

        <style>
            .home {
                width: 100%;
                text-align: center;
            }

            .posters {
                margin-top: 60px;
            }

            .carousel {
                align-items: center;
                display: flex;
                /* margin: 2rem auto; */
                overflow: hidden;
                position: relative;
                height: 30vh;
            }

            .carousel__images {
                height: 100%;
                display: flex;
                transform: translateX(0);
                transition: transform 0.25s;
            }

            .carousel__images img {
                /* border-radius: 5px; */
                height: -webkit-fill-available;
                width: 100vw;
                object-fit: cover;
            }

            .carousel__button {
                background: teal;
                border: 0;
                border-radius: 50%;
                color: white;
                cursor: pointer;
                font-size: 1.5rem;
                font-weight: bold;
                opacity: 0.5;
                position: absolute;
                transition: opacity 0.25s;
                width: 3rem;
                z-index: 1;
            }

            .carousel__button.previous {
                width: 30px;
                left: 5px;
            }

            .carousel__button.next {
                width: 30px;
                right: 5px;
            }

            .carousel__button:hover {
                opacity: 0.5;
            }

            .home_content {
                background-color: #f6f6f6;
                border-top-left-radius: 12px;
                border-top-right-radius: 12px;
                margin-top: -12px;
                padding: 12px 0px;
                z-index: 100;
            }

            .hp_heading h1 {
                margin-top: 12px !important;
                margin-bottom: 0px !important;
            }

            .hp_heading p2 {
                margin-top: 12px !important;
            }

            .home_thumbnail_card {
                margin: 24px;
                background-color: #ffffff;
                transition: 0.3s;
                box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
                padding: 24px;
                border-radius: 12px;
                width: -webkit-fill-available;
                height: fit-content;
                display: grid;
                grid-template-columns: auto;
                text-align: left;
            }

            .home_thumbnail_card .row_one {
                display: grid;
                grid-template-columns: auto auto;
                justify-content: space-between;
                align-items: center;
            }

            .home_thumbnail_card .row_one h3{
                margin: 0px !important;
            }

            .home_small_card {
                margin: 24px;
                background-color: #ffffff;
                transition: 0.3s;
                box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
                padding: 24px;
                border-radius: 12px;
                width: -webkit-fill-available;
                height: fit-content;
                display: grid;
                grid-template-columns: auto;
                text-align: left;
            }

            .home_small_card h3{
                margin: 0px 0px 8px 0px !important;
            }

            .home_small_card p{
                margin: 0px 0px 20px 0px !important;
            }

            .hp_button {
                width: 85px !important;
                text-align: center !important;
                background: #0174cf !important;
                color: white !important;
                border-color: transparent !important;
                text-shadow: none !important;
                margin: 0px !important;
                float: right;
            }

            #home_thumbnail_list {
                height: fit-content;
                display: grid;
                grid-template-columns: 35vw 35vw;
                justify-content: space-between;
                align-content: space-between;
                padding-top: 4px;
            }

            #home_thumbnail_list .list_card {
                width: -webkit-fill-available;
            }

            #home_thumbnail_list .thumbnail_content {
                height: 180px;
                text-align: center;
                margin-top: 12px;
                border-radius: 12px;
            }

            #home_thumbnail_list .thumbnail_image {
                height: 100%;
                width: -webkit-fill-available;
                object-fit: cover;
                border-radius: 12px;
                /* -webkit-mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(40, 40, 40, 40)); */
            }

            #home_thumbnail_list .thumbnail_name {
                color: white;
                margin: -50px 0px 0px 0px !important;
                text-shadow: #404040 0px 0px 12px;
                font-size: 13px;
            }

            @media only screen and (max-device-height: 400px) {
                #home_thumbnail_slider {
                    display: none;
                }

                #home_thumbnail_list {
                    grid-template-columns: 20vw 20vw 20vw 20vw !important;
                }

                #home_thumbnail_list .thumbnail_content {
                    height: 200px;
                }

                .carousel {
                    height: 65vh;
                }
            }

            @media only screen and (max-device-width: 420px) {
                #home_thumbnail_slider {
                    display: none;
                }
            }

            @media only screen and (min-device-width: 421px) and (min-device-height: 401px) {
                #home_thumbnail_list {
                    display: none;
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
                        <button class="carousel__button previous" id="previous"> < </button>
                                <div class="carousel__images">
                                    <img src="images/homepage/Iphone1.jpg" alt="poster1">
                                    <img src="images/homepage/Iphone2.jpg" alt="poster2">
                                </div>
                                <button class="carousel__button next" id="next"> > </button>
                    </div>
                </div>

                <div class="home_content">
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
                            <h3>Destination</h3>
                            <button onclick="window.location.href='destination_list.php'" id="see_all_btn" class="hp_button">See all</button>
                        </div>
                        <div id="home_thumbnail_list">
                            <div id="thumbnail_one" class="list_card">
                                <a id="clickedId" onclick="onDestinationSelect(this.id)">
                                    <div class="thumbnail_content">
                                        <img src="images/destinations/Big Ben.jpg" class="thumbnail_image">
                                        <h3 class="thumbnail_name">BIG BEN</h3>
                                    </div>
                                </a>
                            </div>

                            <div id="thumbnail_two" class="list_card">
                                <a id="clickedId" onclick="onDestinationSelect(this.id)">
                                    <div class="thumbnail_content">
                                        <img src="images/destinations/Cotswolds.jpg" class="thumbnail_image">
                                        <h3 class="thumbnail_name">COTSWOLDS</h3>
                                    </div>
                                </a>
                            </div>

                            <div id="thumbnail_three" class="list_card">
                                <a id="clickedId" onclick="onDestinationSelect(this.id)">
                                    <div class="thumbnail_content">
                                        <img src="images/destinations/York Minster.jpg" class="thumbnail_image">
                                        <h3 class="thumbnail_name">YORK MINSTER</h3>
                                    </div>
                                </a>
                            </div>

                            <div id="thumbnail_four" class="list_card">
                                <a id="clickedId" onclick="onDestinationSelect(this.id)">
                                    <div class="thumbnail_content">
                                        <img src="images/destinations/Buckingham Palace.jpg" class="thumbnail_image">
                                        <h3 class="thumbnail_name">BUCKINGHAM PALACE</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="home_thumbnail_slider">
                            <div id="thumbnail_one" class="slider_card">
                                <a id="clickedId" onclick="onDestinationSelect(this.id)">
                                    <div class="thumbnail_content">
                                        <img src="images/destinations/Big Ben.jpg" class="thumbnail_image">
                                        <h3 class="thumbnail_name">BIG BEN</h3>
                                    </div>
                                </a>
                            </div>

                            <div id="thumbnail_two" class="slider_card">
                                <a id="clickedId" onclick="onDestinationSelect(this.id)">
                                    <div class="thumbnail_content">
                                        <img src="images/destinations/Cotswolds.jpg" class="thumbnail_image">
                                        <h3 class="thumbnail_name">COTSWOLDS</h3>
                                    </div>
                                </a>
                            </div>

                            <div id="thumbnail_three" class="slider_card">
                                <a id="clickedId" onclick="onDestinationSelect(this.id)">
                                    <div class="thumbnail_content">
                                        <img src="images/destinations/York Minster.jpg" class="thumbnail_image">
                                        <h3 class="thumbnail_name">YORK MINSTER</h3>
                                    </div>
                                </a>
                            </div>

                            <div id="thumbnail_four" class="slider_card">
                                <a id="clickedId" onclick="onDestinationSelect(this.id)">
                                    <div class="thumbnail_content">
                                        <img src="images/destinations/Buckingham Palace.jpg" class="thumbnail_image">
                                        <h3 class="thumbnail_name">BUCKINGHAM PALACE</h3>
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
</html>