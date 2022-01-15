function signup() {
  var users = JSON.parse(localStorage.getItem("users"));
  var name = document.getElementById("name_reg").value;
  var email = document.getElementById("email_reg").value;

  var today = new Date();
  var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();

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
    email: email,
    currentPoints: 150,
    contactNumber: contactNumber,
    password: password,
    signupDate: date,
    favouritesList: [],
    reviewCount: 1,
    bookings: [
      {
        id: 1,
        poiName: "York Minster",
        isComplete: false,
        isFeedbackGiven: false,
        bookingDate: "25-12-2021",
        routeStart: "London",
        routeFinish: "Burmingham",
        durationHours: 2,
        durationMin: 15,
        ratingStars: 4,
        ratingComment: "one of the best destinations",
        passengers: 2,
        imageUrl:
          "images/destinations/York Minster.jpg",
      },
      {
        id: 2,
        poiName: "The British Museum",
        isComplete: false,
        isFeedbackGiven: false,
        bookingDate: "25-12-2022",
        routeStart: "Yorkshire",
        routeFinish: "Westminster",
        durationHours: 6,
        durationMin: 20,
        ratingStars: 4,
        ratingComment: "one of the best destinations",
        passengers: 3,
        imageUrl:
          "images/destinations/The British Museum.jpg",
      }
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
