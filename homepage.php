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

    <script type="text/javascript" src="js/carousel.js"></script>

    <style>
        .home {
            width: 100%;
        }

        .posters {
            margin-top: 60px;
        }

        .carousel {
            align-items: center;
            display: flex;
            margin: 2rem auto;
            overflow: hidden;
            position: relative;
        }

        .carousel__images {
            display: flex;
            transform: translateX(0);
            transition: transform 0.25s;
        }

        .carousel__images img {
            border-radius: 5px;
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

        .hp_heading {
            text-align: center;

        }

        .hp_heading h1 {
            text-align: center;
            font-family: Noto Sans;
            font-weight: 900;
            font-size: 30px;
            line-height: 14px;
            letter-spacing: 0.01em;
            color: #404040;
        }

        .hp_heading p {
            font-family: Noto Sans;
            font-size: 14px;
            line-height: 0;
            letter-spacing: 0.01em;
            color: #404040;
        }

        .home_card_one {
            padding-bottom: 1%;
            background-color: #ffffff;
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
            transition: 0.3s;
            border-radius: 15px;
            margin: 5%;
            height: 280px;
            width: 90%;
        }

        .home_card_one h4 {
            margin: 0;
            position: absolute;
            padding: 20px;
        }

        .home_card_two {
            padding-bottom: 1%;
            background-color: #ffffff;
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
            transition: 0.3s;
            border-radius: 15px;
            margin: 5%;
            height: 155px;
            width: 90%;
        }

        .home_card_two h4 {
            margin: 0;
            padding: 20px;
            padding-bottom: 10px;
        }

        .home_card_two p {
            margin: 0;
            padding: 20px;
            padding-top: 0;
            padding-bottom: 5px;
        }

        .home_card_three {
            padding-bottom: 1%;
            background-color: #ffffff;
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
            transition: 0.3s;
            border-radius: 15px;
            margin: 5%;
            height: 174px;
            width: 90%;
        }

        .home_card_three h4 {
            margin: 0;
            padding: 20px;
            padding-bottom: 10px;
        }

        .home_card_three p {
            margin: 0;
            padding: 20px;
            padding-top: 0;
            padding-bottom: 5px;
        }

        .hp_button {
            margin-top: 14px;
            position: absolute !important;
            width: 85px !important;
            text-align: center !important;
            background: #0174cf !important;
            color: white !important;
            border-color: transparent !important;
            font-weight: 100 !important;
            font-size: 14px !important;
        }

        .dest_card_one img {
            margin-top: 75px;
            margin-left: 18px;
            width: 50%;
            height: 190px;
            object-fit: cover;
            border-radius: 15px;
        }

        /* .dest_card .sub_card {
			position: absolute;
			bottom: 0;
			border-radius: 15px 15px 15px 15px;
			background: linear-gradient(to left, rgba(0, 0, 0, 0) 0%, rgba(102, 102, 102, 0.8));
			color: #f1f1f1;
			width: 38%;
			padding: 113px;
		} */

        .dest_card_one .dest_name {
            position: absolute;
            bottom: 0;
            left: 15px;
            color: white;
            font-size: 24px;
        }

        .dest_card_two img {
            margin-top: 75px;
            margin-left: 175px;
            width: 42%;
            height: 190px;
            object-fit: cover;
            border-radius: 15px;
        }

        .dest_card_two .dest_name {
            position: absolute;
            bottom: 0;
            left: 172px;
            color: white;
            font-size: 24px;
        }

        @media only screen and (min-device-width: 375px) and (max-device-width: 667px) {
            .posters img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }

            .posters .carousel__button {
                border-radius: 50%;
                padding-left: 3%;
                padding-right: 6%;
            }

            .home .hp_heading {
                margin-top: 10%;
            }

            .home_card_one {
                margin-top: 10%;
            }

            .hp_button {
                right: 35px;
            }
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 850px) {
            .posters img {
                height: 380px;
                width: 100%;
                object-fit: cover;
            }

            .posters .carousel__button {
                border-radius: 50%;
                padding-left: 3%;
                padding-right: 5%;
            }

            .home .hp_heading {
                margin-top: 6%;
            }

            .home_card_one {
                margin-top: 6%;
            }

            .hp_button {
                right: 62px;
            }

            .dest_card_two img {
                width: 33%;
            }

            .home_card_three {
                height: 155px;
            }
        }

        @media only screen and (min-device-width: 1024px) {
            .posters img {
                height: 450px;
                width: 100%;
                object-fit: cover;
            }

            .posters .carousel__button {
                border-radius: 50%;
                padding-left: 2%;
                padding-right: 3%;
            }

            .home .hp_heading {
                margin-top: 5%;
            }

            .home_card_one {
                margin-top: 5%;
            }

            .hp_button {
                right: 70px;
            }

            .dest_card_two img {
                width: 33%;
            }

            .home_card_three {
                height: 155px;
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
                    <button class="carousel__button previous" id="previous">
                        < </button>
                            <div class="carousel__images">
                                <img src="images/homepage/Iphone1.jpg" alt="poster1">
                                <img src="images/homepage/Iphone2.jpg" alt="poster2">
                            </div>
                            <button class="carousel__button next" id="next"> > </button>
                </div>
            </div>

            <div>
                <div class="hp_heading">
                    <h1>
                        Ticket Details
                    </h1>
                    <p>
                        Confirm your ticket details from here
                    </p>
                </div>

                <div class="home_card_one">
                    <div>
                        <h4 style="font-size: 20px;">Destination</h4>
                        <div>
                            <button class="hp_button">See all</button>
                        </div>
                    </div>
                    <div>
                        <div id="card_one" style="position:absolute">
                            <a id="clickedId" onclick="onDestinationSelect(this.id)">
                                <div class="dest_card_one">
                                    <div style="position: relative;">
                                        <img src="images/destinations/Big Ben.jpg" id="card_image">
                                        <div class="sub_card">
                                            <h4 class="dest_name">BIG BEN</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div id="card_two" style="position:absolute">
                            <a id="clickedId" onclick="onDestinationSelect(this.id)">
                                <div class="dest_card_two">
                                    <div style="position: relative;">
                                        <img src="images/destinations/Big Ben.jpg" id="card_image">
                                        <div class="sub_card">
                                            <h4 class="dest_name">BIG BEN</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="home_card_two">
                    <div>
                        <h4 style="font-size: 20px;">Booking</h4>
                        <p>Book your train from here now</p>
                    </div>
                    <div>
                        <button class="hp_button">Book</button>
                    </div>
                </div>

                <div class="home_card_three">
                    <div>
                        <h4 style="font-size: 20px;">Tresure hunt</h4>
                        <p>Play games to learn more about destinations and earn points</p>
                    </div>
                    <div>
                        <button class="hp_button">Play</button>
                    </div>
                </div>
            </div>


        </div>
        <?php include("navigation_bar.php"); ?>
        <?php include("footer.php"); ?>
    </div>
</body>

</html