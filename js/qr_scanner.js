
$(function initialization(){
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
        // alert (c);
        let feedbackLink = document.getElementById("feedback_link");
        // document.getElementById("scan_qr_page").style.display = "none";
        feedbackLink.click();
        //  alert (c);
    });
});

