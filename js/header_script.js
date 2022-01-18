$(function initialize(){
    var currentlySignedInUser = JSON.parse(localStorage.getItem("currentlySignedInUser"));
  
    $("#profile_image").attr("src", currentlySignedInUser.profileImage);
    $("#back_btn_img").css("fill", "#404040");

    $("#back_btn").click( function(){
        window.history.back();
    });

    $("#common_header_profile_icon").click( function(){
        window.location.href = 'profile.php';
    });

});