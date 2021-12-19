<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
    <link rel="stylesheet" href="css/themes/styles.css" />
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
-->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <!--    <script type="text/javascript" src="js/search_screen.js"></script>-->

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
        }
    </style>

</head>

<body>
    <div data-role="page" id="homePage">
        <?php include("homepage_header.php"); ?>
        <div class="home">
            <div class="posters">
                <div class="carousel">
                    <button class="carousel__button previous" id="previous" > < </button>
                        <div class="carousel__images">
                            <img src="images/homepage/Iphone1.jpg" alt="poster1">
                            <img src="images/homepage/Iphone2.jpg" alt="poster2">
                        </div>
                    <button class="carousel__button next" id="next" > > </button>
                </div>
            </div>


        </div>
        <?php include("navigation_bar.php"); ?>
        <?php include("footer.php"); ?>
    </div>
</body>

</html