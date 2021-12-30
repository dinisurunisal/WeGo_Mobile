var video2;
$(function initialization(){
    video2 = document.getElementById('qr_scan');
});

let scanner = new Instascan.Scanner({video: video2});

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
});