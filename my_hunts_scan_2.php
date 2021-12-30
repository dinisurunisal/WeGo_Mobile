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
    <script src="https://reeteshghimire.com.np/wp-content/uploads/2021/05/html5-qrcode.min_.js"></script>
    
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
        <div style="width:-webkit-fill-available; height:-webkit-fill-available;" id="reader"></div>
	</div>
    <script type="text/javascript">
        function onScanSuccess(qrCodeMessage) {
            alert(qrCodeMessage)
        }

        function onScanError(errorMessage) {
            // alert("Error scanning QR")
        }

        var html5QrcodeScanner = new Html5QrcodeScanner("reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess, onScanError);

    </script>
</body>
</html>