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
<!--    <script type="text/javascript" src="qr-resource/qcode-decoder.min.js"></script>-->
    <script 
    src="https://raw.githubusercontent.com/mebjas/html5-qrcode/master/minified/html5-qrcode.min.js">
    </script>
    
    <style>
/*
        .scan_box:before, .scan_box:after, .scan_box>:first-child:before, .scan_box>:first-child:after {
            //position:absolute;
            //width:80px; height: 80px;
            border-color:green;
            border-style:solid;
            content: ' ';
        }
        .scan_box:before {top:0;left:0;border-width: 12px 0 0 12px}
        .scan_box:after {top:0;right:0;border-width: 12px 12px 0 0}
        .scan_box>:first-child:before {bottom:0;right:0;border-width: 0 12px 12px 0}
        .scan_box>:first-child:after {bottom:0;left:0;border-width: 0 0 12px 12px}
*/
        .scan_bg {
            height: 598px;
            //top: 50%;
            //-ms-transform: translateY(-50%);
            //transform: translateY(-50%);
        }   
        .scan_box {
            border-radius: 8px;
            transform: translateY(50%);
            text-align:center;
            width:280px;
            height:280px;
            padding-top: 6px;
            padding-left: 6px;
            padding-right: 6px;
            padding-bottom: 6px;
            background: linear-gradient(180deg,#13ff00,rgba(0,0,128,0)) no-repeat 0% 0%,
            linear-gradient(0deg,#13ff00,rgba(0,0,128,0)) no-repeat 0% 100%,
            linear-gradient(180deg,#13ff00,rgba(0,0,128,0)) no-repeat 100% 0%,
            linear-gradient(0deg,#13ff00,rgba(0,0,128,0)) no-repeat 100% 100%,
            linear-gradient(90deg,#13ff00,rgba(0,0,128,0)) no-repeat 0% 0%,
            linear-gradient(90deg,#13ff00,rgba(0,0,128,0)) no-repeat 0% 100%,
            linear-gradient(-90deg,#13ff00,rgba(0,0,128,0)) no-repeat 100% 0%,
            linear-gradient(-90deg,#13ff00,rgba(0,0,128,0)) no-repeat 100% 100%;

            background-size: 6em 12px, 6em 12px, 6em 12px, 6em 12px, 12px 6em, 12px 6em, 12px 6em, 12px 6em;
        }
    </style>
</head>

<body style="height: 100%;">
	<div data-role="page" id="scan-qr-page" style="height: 100%;">
        <div style="padding:16px; background-color:#0147cf;">
            <div onclick="history.back()" id="back_btn">
                <img id="btn_icon_image" src="images/icons/backButton2.png" alt="back"/>
            </div>
            <h2 style="color:white">Add New Hunt</h2>
            <p style="color:white">To confirm your hunt scan the QR located in the site</p>
        </div>
        <div class="scan_bg" style="width:-webkit-fill-available; text-align:-webkit-center; padding:16px; background-color:#404040;">
            <div class="scan_box">
                <div id="reader"></div>
<!--                <input type="file" id="qr-input-file" accept="image/*" capture>-->
            </div>
        </div>
	</div>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // Handle on success condition with the decoded text or result.
            console.log(`Scan result: ${decodedText}`, decodedResult);
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
//        const vgaConstraints = {
//            video: { width: { exact: 280 }, height: { exact: 280 } },
//        };
//        
//        var video = document.querySelector("#qr_scan");
//        video.srcObject = mediaStream;
////        var video = document.getElementById('camera');
//
//        if (navigator.mediaDevices.getUserMedia) {
////            navigator.mediaDevices.getUserMedia(vgaConstraints).then((stream) => {
////                video.srcObject = stream;
////            });
//          navigator.mediaDevices.getUserMedia(vgaConstraints)
//            .then(function (stream) {
//                var videoTracks = stream.getVideoTracks();
//                console.log('Got stream with constraints:', vgaConstraints);
//                console.log('Using video device: ' + videoTracks[0].label);
//                stream.onremovetrack = function() {
//                    console.log('Stream ended');
//                };
//                window.stream = stream; // make variable available to browser console
//                video.srcObject = stream;
//                
//              //window.stream = stream;
//              //video.srcObject = window.stream;
//            })
//            .catch(function (err0r) {
//              console.log(err0r);
//            });
//        }
//        
//        function resultHandler (err, result) {
//            if (err)
//                return console.log(err.message);
//
//            alert(result);
//        }
//        
//        video.srcObject = mediaStream;
//        
//        qr.decodeFromCamera(video, resultHandler);
        
    </script>
</body>
</html