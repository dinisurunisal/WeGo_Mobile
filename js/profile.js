var currentlySignedInUser;

$(document).on("pageinit",function(){
    currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
    populateUserFields();
});

function populateUserFields(){
    $('#username_field').html(currentlySignedInUser.username);
    $('#member_since_field').html(currentlySignedInUser.signupDate);
    $('#contant_number_field').html(currentlySignedInUser.contant_number_field);
    $('#email_field').html(currentlySignedInUser.email)
}





// open feedback popup
function showFeedbackPopup() {
    $("#feedbackPopup").popup("open");

}

// close feedback popup
function closeFeedbackPopup() {
    showFailure("Are you sure?")
    $("#feedbackPopup").popup("close");

}

function sendFeedback() {
    showSuccess("Thank you for the Feedback");
    $("#feedbackPopup").popup("close");

}



// document.getElementById("sendBtn").addEventListener("click", myFunction);

// function myFunction(){
//     alert('Hello world!');
// }