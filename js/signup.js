function signup() {
  var users = JSON.parse(localStorage.getItem("users"));
  var name = document.getElementById("name_reg").value;
  var password = document.getElementById("password_reg").value;
  var conPassword = document.getElementById("confirm_password_reg").value;
  var contactNumber = document.getElementById("contact_number_reg").value;
  if (conPassword !== password) {
    showFailure("Password combinations do not match!");
    document.getElementById("confirmPasswordForm").style.border =
      "solid 2px red !important";
    document.getElementById("confirmPasswordForm").style.background =
      "red !important";
    return;
  }
  var currentUser = {
    username: name,
    currentPoints: 100,
    contactNumber: contactNumber,
    password: password,
    favouritesList: [],
    bookings: [
      {
        id: 1,
        poiName: "CAQ 1120",
        isComplete: true,
        isFeedbackGiven: false,
        bookingDate: "12/12/2019",
        routeStart: "EUS",
        routeFinish: "BHM",
        durationHours: 2,
        durationMin: 15,
        ratingStars: 4,
        ratingComment: "one of the best destinations",
        imageUrl:
          "https://cdn.apartmenttherapy.info/image/upload/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_16:9/project%20prism%2Fcolor%20search%20archive%2F2ee0d7a33e80d1667d0c7f4bd262159f8da38333",
      },
    ],
  };
  //localStorage.setItem("users", JSON.stringify([]));
  var users = JSON.parse(localStorage.getItem("users"));
  var isAlreadyRegistered = false;
  if (users == null) {
    users = [];
  } else {
    users.forEach(function (user, index) {
      console.log(user);
      if (user.contactNumber == contactNumber) {
        isAlreadyRegistered = true;
        showFailure("You are already registerd. Try sigining in.");
        setTimeout(function () {
          goBack();
        }, 2000);
        return;
      }
    });
  }

  if (!isAlreadyRegistered) {
    currentUser.userId = users.length + 1;
    users.push(currentUser);
    localStorage.setItem("users", JSON.stringify(users));
    localStorage.setItem("currentlySignedInUser", JSON.stringify(currentUser));
    showSuccess("Registered");
    setTimeout(function () {
      goToApp();
    }, 2500);
  }
}

function goToApp() {
  window.location.href = "homepage.php";
}

function goBack() {
  $.mobile.back();
}
