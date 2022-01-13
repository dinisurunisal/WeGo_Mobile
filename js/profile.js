var currentlySignedInUser;
var users;

$(function initialization(){
    currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
    populateUserFields();
});

function populateUserFields(){
    $('#username_field').html(currentlySignedInUser.username);
    $('#member_since_field').html(currentlySignedInUser.signupDate);
    $('#contant_number_field').html(currentlySignedInUser.contant_number_field);
    $('#email_field').html(currentlySignedInUser.email)
}

// edit profile popup
function showProfileMethod() {
    $("#popupBasic").popup("open");
    $("#nameForm").val(currentlySignedInUser.username);
    $("#contactNumberForm").val(currentlySignedInUser.contactNumber);
}

function closeEditPopup() {
    // showFailure("Canceled")
    $("#popupBasic").popup("close");

}

function saveProfileInformation() {
    var previousNumber = currentlySignedInUser.contactNumber;

    var name = $("#nameForm").val();
    var phoneNumber = $("#contactNumberForm").val();
    var password = $("#passwordForm").val()
    var confirmPassword = $("#confirmPasswordForm").val();
    if (name) {
        console.log("Set Name: " + name)
        currentlySignedInUser.username = name;
    }
    if (phoneNumber) {
        console.log("Set Phone: " + phoneNumber)
        currentlySignedInUser.contactNumber = phoneNumber;
    }

    if (password) {
        if (password === confirmPassword) {
            currentlySignedInUser.password = password;
        } else {
            showFailure("Passwords are invalid.")
            return;
        }
    }
    console.log(currentlySignedInUser);

    var users = JSON.parse(localStorage.getItem('users'));
    $.each(users, function (key, user) {
        if (user.contactNumber === previousNumber) {
            users[key] = currentlySignedInUser;
        }
    });
    localStorage.setItem("users", JSON.stringify(users));
    localStorage.setItem("currentlySignedInUser", JSON.stringify(currentlySignedInUser));

    $("#popupBasic").popup("close");
    showSuccess("Updated your info.")
    setTimeout(function () {
        location.reload()
    }, 2000);

}

// open feedback popup
function showFeedbackPopup() {
    $("#feedbackPopup").popup("open");

}

function sendFeedback() {
    showSuccess("Thank you for the Feedback");
    $("#feedbackPopup").popup("close");

}

// close feedback popup
function closeFeedbackPopup() {
    showFailure("Canceled")
    $("#feedbackPopup").popup("close");

}





// document.getElementById("sendBtn").addEventListener("click", myFunction);

// function myFunction(){
//     alert('Hello world!');
// }