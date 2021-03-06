<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>QR Scan</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <!--    QR script-->
        <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <script type="text/javascript" src="js/qr_scanner.js"></script>

        <style>
            @media only screen 
                and (max-device-height: 600px) {

                    #scan_qr_page {
                        grid-template-columns: auto 28% !important;
                        align-content: flex-start;
                        justify-items: self-end;
                        
                    }

                    .scan_instructions {
                        height: -webkit-fill-available !important;
                        order: 2;
                    }

                    .scan_bg {
                        order: 1;
                    } 

                    #back_btn {
                        text-align: end !important;
                    }

                    .scan_box {
                        width:32vw !important;
                        height:32vw !important;
                        margin-top: 9% !important;
                    }
                }

            @media only screen 
                and (min-device-width: 700px) and (min-device-height: 850px){

                    #scan_qr_page .scan_box {
                        width: 40vh !important;
                        height: 40vh !important;
                        margin-top: 28% !important;
                        margin-bottom: 28% !important;           
                    }
            }

            @media only screen 
                and (min-device-width: 900px) and (max-device-height: 800px){

                    #scan_qr_page .scan_box {
                        width: 40vh !important;
                        height: 40vh !important;
                        margin-top: 14% !important;
                        margin-bottom: 14% !important;           
                    }
            }

        </style>
    </head>

    <body>
        <div data-role="page" id="scan_qr_page">
            <div class="scan_instructions">
                <div onclick="history.back()" id="back_btn">
                    <svg id="back_btn_img">
                        <use href="images/icons/backButton.svg#back_btn_img"></use>
                    </svg>
                </div>
                <h2>Add New Hunt</h2>
                <p>To confirm your hunt scan the QR located in the site</p>
                <a id="feedback_link" href="#my_hunts_feedback" data-rel="popup" data-transition="pop" data-position-to="window" style="display: none;"></a>
            </div>
            <div class="scan_bg">
                <div class="scan_box">
                    <video id="qr_scan" autoplay></video>
                </div>
            </div>
            <?php include("my_hunts_feedback.php")?>
            <?php include("success_popups.php"); ?>
        </div>
    </body>
</html>