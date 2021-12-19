function forget_password() {
  document.getElementById("confirmationMessage").style.visibility = "visible";
  setTimeout(function () {
    goBack();
  }, 2000);
}

function goBack() {
  $.mobile.back();
}
