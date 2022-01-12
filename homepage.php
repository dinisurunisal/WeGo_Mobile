<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/themes/my-custom-theme.css" />
    <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
    <link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />

    <!-- The three things that jQuery Mobile needs to work -->
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <script type="text/javascript" src="js/homepage.js"></script>

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

        .carousel_images {
            height: 100%;
            display: flex;
            transform: translateX(0);
            transition: transform 0.25s;
        }

        .carousel_images img {
            /* border-radius: 5px; */
            height: -webkit-fill-available;
            width: 100vw;
            object-fit: cover;
        }

        .carousel_button {
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

        .carousel_button.previous {
            width: 30px;
            left: 5px;
        }

        .carousel_button.next {
            width: 30px;
            right: 5px;
        }

        .carousel_button:hover {
            opacity: 0.5;
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

            #thumbnail_list_small {
                height: fit-content;
                display: grid;
                grid-template-columns: 35vw 35vw;
                justify-content: space-between;
                align-content: space-between;
                padding-top: 4px;
            }

            #thumbnail_list_small .thumbnail_card {
                width: -webkit-fill-available;
            }

            #thumbnail_list_small .thumbnail_content {
                height: 180px;
                text-align: center;
                margin-top: 12px;
                border-radius: 12px;
            }

            #thumbnail_list_small .thumbnail_image {
                height: 100%;
                width: -webkit-fill-available;
                object-fit: cover;
                border-radius: 12px;
                filter: brightness(0.8)
                /* -webkit-mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(40, 40, 40, 40)); */
            }

            #thumbnail_list_small .thumbnail_name {
                color: white;
                margin: -50px 0px 0px 0px !important;
                text-shadow: #404040 -2px -2px 6px;
                font-size: 16px;
                position: relative;
            }

        @media only screen and (min-device-width: 375px) and (max-device-width: 667px) {
            /* .posters img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            } */

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
            /* .posters img {
                height: 380px;
                width: 100%;
                object-fit: cover;
            } */

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
            /* .posters img {
                height: 450px;
                width: 100%;
                object-fit: cover;
            } */

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
                                <img src="images/homepage/Iphone1.jpg" alt="">
                                <img src="images/homepage/Iphone2.jpg" alt="">
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
                            <h3>Destination</h3>
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