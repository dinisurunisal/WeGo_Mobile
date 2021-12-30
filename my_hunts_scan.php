<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>QR Scan</title>
        <link rel="stylesheet" href="jquery-theme/themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.css" />
        <link rel="stylesheet" href="jquery-theme/themes/theme.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <!--    QR script-->
        <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <!-- <script type="text/javascript" src="js/qr_scanner.js"></script> -->

        <style>
            @media only screen 
                    and (max-device-height: 600px) {

                        #scan_qr_page {
                            grid-template-columns: auto 28%;
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

        </style>
    </head>

    <body>
        <div data-role="page" id="scan_qr_page">
            <div class="scan_instructions">
                <div onclick="history.back()" id="back_btn">
                    <img id="btn_icon_image" src="images/icons/backButton2.png" alt="back"/>
                </div>
                <h2>Add New Hunt</h2>
                <p>To confirm your hunt scan the QR located in the site</p>
            </div>
            <div class="scan_bg">
                <div class="scan_box">
                    <video id="qr_scan" autoplay></video>
                </div>
            </div>
        </div>
        <!-- <div data-role="popup" data-transition="pop" style="padding: 20px;" id="my_hunts_feedback" class="ui-content">
            <form id="form" onsubmit="event.preventDefault(); submitFeedback()">
                <h2>How was your experience?</h2>
                <p2>Let us know what you think</p2>
                <div id="star_rating_holder">
                    <i id="star_rating_one" class="material-icons" style="font-size: 40px; color:red">star_border</i>
                    <i id="star_rating_two" class="material-icons" style="font-size: 40px; color:red">star_border</i>
                    <i id="star_rating_three" class="material-icons" style="font-size: 40px; color:red">star_border</i>
                    <i id="star_rating_four" class="material-icons" style="font-size: 40px; color:red">star_border</i>
                    <i id="star_rating_five" class="material-icons" style="font-size: 40px; color:red">star_border</i>
                </div>
                <textarea type="text" required name="comment" id="form_comment" class="formField" placeholder="Enter your comment here"></textarea>
                <div class="form_button_container">
                    <a data-rel="back"><button class="cancel_btn">Cancel</button></a>
                    <button type="submit" class="submit_btn" data-role="button">Submit</button>
                </div>
            </form>
        </div> -->
    </body>

    <script>
        let scanner = new Instascan.Scanner({video: document.getElementById('qr_scan')});

        Instascan.Camera.getCameras().then(function(cameras){
            if(cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                alert ('No camera found');
            }
        }).catch(function(e) {
            console.error(e);
        });

        scanner.addListener('scan', function(c) {
            alert (c);
            // popupwindow = window.("#my_hunts_feedback");
        });
    </script>
</html>