var currentlySignedInUser;

$(function initialization(){
    currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
    UpdatePoints();
});

function UpdatePoints(){
    $('#points').html(currentlySignedInUser.currentPoints);
}