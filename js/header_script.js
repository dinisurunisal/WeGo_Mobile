$(function initialize(){
    document.getElementById("back_btn_img").style.fill = "#404040";

    document.getElementById("back_btn").addEventListener("click", function(){
        // window.location = document.referrer;
        window.history.back();
    });

    document.getElementById("common_header_profile_icon").addEventListener("click", function(){
        // window.location = document.referrer;
        window.location.href = 'profile.php';
    });
});