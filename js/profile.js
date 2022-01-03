// open feedback popup
function showFeedbackPopup() {
    $("#feedbackPopup").popup("open");

}

// close feedback popup
function closeFeedbackPopup() {
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