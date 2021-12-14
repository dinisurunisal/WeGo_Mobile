<html>
<head>
    <title>WeGo</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/my_hunts_styles.css" />
    <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
	<link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript" src="js/my_hunts.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <h4 style="text-align: center; ">No locations hunted yet.</h4>
            </div>
        </div>
        <?php include("footer.php"); ?>
        <?php include("navigation_bar.php"); ?>
	</div>
</body>
</html