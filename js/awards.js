var currentlySignedInUser;

$(document).on("pageinit",function(){
    currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
    UpdatePoints();
});

function UpdatePoints(){
    $('#points').html(currentlySignedInUser.currentPoints);
}