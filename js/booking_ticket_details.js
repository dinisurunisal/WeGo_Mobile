$(document).on("pageinit", function () {
  initPage();
});

var tempBooking;
let subTotal = 0;
let serviceCharge = 20;
let totalPrice = 0;
let sellerEmail = "pasinduekanayake123@gmail.com";
let images = [
  "images/destinations/Big Ben.jpg",
  "images/destinations/Cotswolds.jpg",
  "images/destinations/York Minster.jpg",
  "images/destinations/The British Museum.jpg",
  "images/destinations/Big Ben.jpg",
];
let poiName;
let poiImage;

function initPage() {
  tempBooking = JSON.parse(localStorage.getItem("tempBooking"));
  console.log(tempBooking);
  currentUser = JSON.parse(localStorage.getItem("currentlySignedInUser"));

  getData();
  calculatePrice();

  paypal
    .Buttons({
      onInit: function (data, actions) {
        // Disable the buttons
        actions.enable();
      },
      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: [
            {
              amount: {
                value: totalPrice,
                currency: "GBP",
              },
              payee: {
                email_address: sellerEmail,
              },
            },
          ],
        });
      },
      onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
          placeOrder("approved");
        });
      },
      onCancel: function (data) {
        placeOrder("cancel");
      },
      style: {
        layout: "horizontal",
        color: "gold",
        shape: "pill",
        label: "paypal",
        tagline: "false",
      },
    })
    .render("#paypal-button-container");
  paypal
    .Buttons({
      onInit: function (data, actions) {
        // Disable the buttons
        actions.enable();
      },
      style: {
        layout: "vertical",
        color: "gold",
        shape: "pill",
        label: "paypal",
      },
    })
    .render("#paypal-card-container");
}

$(document)
  .on("ul.buttonGroup")
  .click(function (event) {
    var selectedItem = event.target;
    if (selectedItem.tagName.toLowerCase() === "li") {
      $("li", this)
        .removeClass("selected")
        .filter(event.target)
        .addClass("selected");
      paymentMethod = $(selectedItem).data("value");
      changePaymentMethod();
    }
  });

function changePaymentMethod() {
  if (paymentMethod === "paypal") {
    $("#paypal-button-container").show();
    $("#placeOrder").hide();
    $("#paypal-card-container").hide();
  }
  if (paymentMethod === "cash") {
    $("#paypal-button-container").hide();
    $("#paypal-card-container").hide();
    $("#placeOrder").show();
  }
  if (paymentMethod === "credit-card") {
    $("#paypal-button-container").hide();
    $("#paypal-card-container").show();
    $("#placeOrder").hide();
  }
}

function getData() {
  // for(var i = 0; i < tempBooking.length; i++)

  lastRecord = tempBooking.at(-1);

  POIs = lastRecord.bbPOI;

  route = lastRecord.bbRoute;
  date = lastRecord.bbDate;
  distance = lastRecord.bbDistance;
  durationHours = lastRecord.bbDurationHours;
  durationMin = lastRecord.bbDurationMin;
  passengers = lastRecord.bbPassengers;
  routeFinishID = lastRecord.bbRouteFinishID;
  routeFinishName = lastRecord.bbRouteFinishName;
  routeStartID = lastRecord.bbRouteStartID;
  routeStartName = lastRecord.bbRouteStartName;

  routeDuration = durationHours + ":" + durationMin + "0hr";

  //first card
  document.getElementById("route_start_ID").innerHTML = routeStartID;
  document.getElementById("route_start_name").innerHTML = routeStartName;
  document.getElementById("route_finish_ID").innerHTML = routeFinishID;
  document.getElementById("route_finish_name").innerHTML = routeFinishName;
  document.getElementById("route_duration").innerHTML = routeDuration;
  document.getElementById("route_distance").innerHTML = distance;

  //second card
  document.getElementById("ticket_type").innerHTML = "should do";
  document.getElementById("date_book").innerHTML = date;
  document.getElementById("number_passengers").innerHTML = passengers;
  for (var i = 0; i < POIs.length; i++) {
    if (POIs[i] == 1) {
      document.getElementById("poi_destination").innerHTML = "one";
    } else if (POIs[i] == 2) {
      document.getElementById("poi_destination").innerHTML = "two";
    } else if (POIs[i] == 3) {
      document.getElementById("poi_destination").innerHTML = "three";
    } else if (POIs[i] == 4) {
      document.getElementById("poi_destination").innerHTML = "four";
    } else {
      document.getElementById("poi_destination").innerHTML = "five";
    }

    $("#poi_destination").clone().appendTo("#poi_destination_2");
  }
  deleteDuplicateCards("poi_destination");
}

function deleteDuplicateCards(idName) {
  var id = document.getElementById(idName);
  id.parentNode.removeChild(id);
}

function calculatePrice() {
  if (route == 1) {
    if (passengers == 1) {
      subTotal += 50;
    } else if (passengers == 2) {
      subTotal += 100;
    } else if (passengers == 3) {
      subTotal += 150;
    } else {
      subTotal += 200;
    }
  } else if (route == 2) {
    if (passengers == 1) {
      subTotal += 30;
    } else if (passengers == 2) {
      subTotal += 60;
    } else if (passengers == 3) {
      subTotal += 90;
    } else {
      subTotal += 120;
    }
  } else if (route == 3) {
    if (passengers == 1) {
      subTotal += 60;
    } else if (passengers == 2) {
      subTotal += 120;
    } else if (passengers == 3) {
      subTotal += 180;
    } else {
      subTotal += 240;
    }
  } else {
    if (passengers == 1) {
      subTotal += 70;
    } else if (passengers == 2) {
      subTotal += 140;
    } else if (passengers == 3) {
      subTotal += 210;
    } else {
      subTotal += 280;
    }
  }

  totalPrice = subTotal + serviceCharge;

  document.getElementById("sub-total").innerHTML = "£" + subTotal;
  document.getElementById("service-charges").innerHTML = "£" + serviceCharge;
  document.getElementById("total-price").innerHTML = "£" + totalPrice;
}

function placeOrder(status) {
  if (status === "approved") {
    let bookings = JSON.parse(
      localStorage.getItem("currentlySignedInUser")
    ).bookings;
    console.log(bookings);
    let lastBookingId;
    if (bookings != null && bookings.length > 0) {
      lastBookingId = bookings[bookings.length - 1].id;
    } else {
      lastBookingId = 1;
    }
    for (var i = 0; i < POIs.length; i++) {
      if (POIs[i] == 1) {
        poiName = "one";
        poiImage = images[0];
        let newBooking = {
          id: lastBookingId + 1,
          poiName: poiName,
          isComplete: false,
          isFeedbackGiven: false,
          bookingDate: date,
          routeStart: routeStartName,
          routeFinish: routeFinishName,
          durationHours: durationHours,
          durationMin: durationMin,
          ratingStars: "",
          ratingComment: "",
          passengers: passengers,
          imageUrl: poiImage,
        };
        bookings.push(newBooking);
      } else if (POIs[i] == 2) {
        poiName = "two";
        poiImage = images[1];
        let newBooking = {
          id: lastBookingId + 1,
          poiName: poiName,
          isComplete: false,
          isFeedbackGiven: false,
          bookingDate: date,
          routeStart: routeStartName,
          routeFinish: routeFinishName,
          durationHours: durationHours,
          durationMin: durationMin,
          ratingStars: "",
          ratingComment: "",
          passengers: passengers,
          imageUrl: poiImage,
        };
        bookings.push(newBooking);
      } else if (POIs[i] == 3) {
        poiName = "three";
        poiImage = images[2];
        let newBooking = {
          id: lastBookingId + 1,
          poiName: poiName,
          isComplete: false,
          isFeedbackGiven: false,
          bookingDate: date,
          routeStart: routeStartName,
          routeFinish: routeFinishName,
          durationHours: durationHours,
          durationMin: durationMin,
          ratingStars: "",
          ratingComment: "",
          passengers: passengers,
          imageUrl: poiImage,
        };
        bookings.push(newBooking);
      } else if (POIs[i] == 4) {
        poiName = "four";
        poiImage = images[3];
        let newBooking = {
          id: lastBookingId + 1,
          poiName: poiName,
          isComplete: false,
          isFeedbackGiven: false,
          bookingDate: date,
          routeStart: routeStartName,
          routeFinish: routeFinishName,
          durationHours: durationHours,
          durationMin: durationMin,
          ratingStars: "",
          ratingComment: "",
          passengers: passengers,
          imageUrl: poiImage,
        };
        bookings.push(newBooking);
      } else {
        poiName = "five";
        poiImage = images[4];
        let newBooking = {
          id: lastBookingId + 1,
          poiName: poiName,
          isComplete: false,
          isFeedbackGiven: false,
          bookingDate: date,
          routeStart: routeStartName,
          routeFinish: routeFinishName,
          durationHours: durationHours,
          durationMin: durationMin,
          ratingStars: "",
          ratingComment: "",
          passengers: passengers,
          imageUrl: poiImage,
        };
        bookings.push(newBooking);
      }
    }

    // if (document.getElementById("pointsChecked").checked) {
    //   userPoints = 0;
    // }

    // currentUser.currentPoints = userPoints + orderPoints;
    // currentUser.orders = orders;

    var users = JSON.parse(localStorage.getItem("users"));
    $.each(users, function (key, user) {
      if (user.userId === currentUser.userId) {
        users[key] = currentUser;
        users[key].bookings = bookings;
      }
    });
    localStorage.setItem("currentlySignedInUser", JSON.stringify(currentUser));
    localStorage.setItem("users", JSON.stringify(users));

    // $.each(sellerOrders, function (key, value) {
    //   if (value.sellerId === mainOrder.sellerId) {
    //     let sellerOrder;
    //     $.each(cartItems, function (key, item) {
    //       sellerOrder = {
    //         foodId: cartItems[key].foodId,
    //         foodTitle: cartItems[key].foodTitle,
    //         orderStatus: "Pending",
    //         foodQuantity: cartItems[key].foodQuantity,
    //         portionSize: cartItems[key].portionSize,
    //         specialInstructions: cartItems[key].specialInstructions,
    //         comments: cartItems[key].comments,
    //         totalPrice: cartItems[key].totalPrice,
    //       };
    //       value.outstandingOrders.push(sellerOrder);
    //     });
    //   }
    // });
    // localStorage.setItem("sellerOrders", JSON.stringify(sellerOrders));

    localStorage.removeItem("tempBooking");

    var tempBooking = [];
    localStorage.setItem("tempBooking", JSON.stringify(tempBooking));

    showSuccess("Order placed, see it in upcoming hunts.");
    setTimeout(function () {
      window.location.replace("my_hunts.php");
    }, 3000);
  }
  if (status === "cancel") {
    showFailure("Payment Failed");
  }
}

function cancel() {
  localStorage.removeItem("tempBooking");

  var tempBooking = [];
  localStorage.setItem("tempBooking", JSON.stringify(tempBooking));

  showFailure("Payment Canceled");
  setTimeout(function () {
    window.location.replace("booking.php");
  }, 3000);
}
