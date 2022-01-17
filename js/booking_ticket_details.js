$(function initialization(){
  document.getElementById("back_btn").style.display = "none";
  initPage();
});

var tempBooking;
let subTotal = 0;
let serviceCharge = 20;
let totalPrice = 0;
let totalWithDis = 0;
let images = [
  "images/destinations/Warwick Castle.jpg",
  "images/destinations/Stonehenge.jpg",
  "images/destinations/The Roman Baths.jpg",
  "images/destinations/Leeds Castle.jpg",
  "images/destinations/York Minster.jpg",
];
let poiName;
let poiImage;

function initPage() {
  tempBooking = JSON.parse(localStorage.getItem("tempBooking"));
  console.log(tempBooking);
  currentUser = JSON.parse(localStorage.getItem("currentlySignedInUser"));

  getData();
  calculatePrice();

  paypal.Buttons({
      onInit: function (data, actions) {
        actions.enable();
      },
      createOrder: function (data, actions) {
        return actions.order.create({
          intent : 'CAPTURE',
          payer : {
            name : {
              given_name: currentUser.username,
              surname : "Doe"
            },
            address : {
              address_line_1 : "123A Oxford Street",
              address_line_2 : "By way",
              admin_area_2 : "London",
              admin_area_1 : "London",
              postal_code : "SW1A 2AA",
              country_code : "UK"
            },
            email_address: "WEGOcustomer@personal.example.com",
            phone : {
              phone_type : "MOBILE",
              phone_number : {
                national_number : currentUser.contactNumber
              }
            }
          },
          purchase_units: [
            {
              amount: {
                value: totalWithDis,
                currency: "GBP",
              }
            }
          ]
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
        tagline: "false"
      },
    })
    .render("#paypal-button-container");

    jQuery(function($) {
      // var $form = $('#frmBooking');
      var handler = StripeCheckout.configure({
        key: 'pk_test_cp21BcECf4kMMUbSlRlZlsMo',
        token: function(token) {
          if(token.id){
            placeOrder("approved");
          }else{
            placeOrder("cancel");
          }
        }
      });
	  

      $('#cardPaymentButton').on('click', function(e) {
        // Code Section B  Open Checkout with further options
        handler.open({
          name: 'WeGo',
          currency: 'gbp',
          description: "Book train tickets using Stripe",
          amount: totalWithDis * 100
        });
        e.preventDefault();
      });

      // Code Section C  Close Checkout on page navigation
      $(window).on('popstate', function() {
        handler.close();
      });
      });

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
    $("#card-payment-btn").hide();
  }
  if (paymentMethod === "cash") {
    $("#paypal-button-container").hide();
    $("#card-payment-btn").hide();
    $("#placeOrder").show();
  }
  if (paymentMethod === "credit-card") {
    $("#paypal-button-container").hide();
    $("#card-payment-btn").show();
    $("#placeOrder").hide();
  }
}

function getData() {
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
  routeType = lastRecord.bbRouteType;

  routeDuration = durationHours + ":" + durationMin + "0hr";

  avlPoints = currentUser.currentPoints;
  avlPointsDuplicate = currentUser.currentPoints;

  //third card
  document.getElementById("totPointsAvailable").innerHTML = avlPoints;

  //first card
  document.getElementById("route_start_ID").innerHTML = routeStartID;
  document.getElementById("route_start_name").innerHTML = routeStartName;
  document.getElementById("route_finish_ID").innerHTML = routeFinishID;
  document.getElementById("route_finish_name").innerHTML = routeFinishName;
  document.getElementById("route_duration").innerHTML = routeDuration;
  document.getElementById("route_distance").innerHTML = distance;

  //second card
  document.getElementById("ticket_type").innerHTML = routeType;
  document.getElementById("date_book").innerHTML = date;
  document.getElementById("number_passengers").innerHTML = passengers;
  for (var i = 0; i < POIs.length; i++) {
    if (POIs[i] == 1) {
      document.getElementById("poi_destination").innerHTML = "Warwick Castle";
    } else if (POIs[i] == 2) {
      document.getElementById("poi_destination").innerHTML = "Stonehenge";
    } else if (POIs[i] == 3) {
      document.getElementById("poi_destination").innerHTML = "The Roman Baths";
    } else if (POIs[i] == 4) {
      document.getElementById("poi_destination").innerHTML = "Leeds Castle";
    } else {
      document.getElementById("poi_destination").innerHTML = "York Minster";
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
  totalWithDis = totalPrice;

  document.getElementById("sub-total").innerHTML = "£" + subTotal;
  document.getElementById("service-charges").innerHTML = "£" + serviceCharge;
  document.getElementById("total-price").innerHTML = "£" + totalPrice;
  document.getElementById("totNumberDisplay").innerHTML = "£" + totalPrice;
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
        poiName = "Warwick Castle";
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
        poiName = "Stonehenge";
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
        poiName = "The Roman Baths";
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
        poiName = "Leeds Castle";
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
        poiName = "York Minster";
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
    currentUser.currentPoints = avlPoints;

    var users = JSON.parse(localStorage.getItem("users"));
    $.each(users, function (key, user) {
      if (user.userId === currentUser.userId) {
        users[key] = currentUser;
        users[key].bookings = bookings;
      }
    });
    localStorage.setItem("currentlySignedInUser", JSON.stringify(currentUser));
    localStorage.setItem("users", JSON.stringify(users));

    localStorage.removeItem("tempBooking");

    var tempBooking = [];
    localStorage.setItem("tempBooking", JSON.stringify(tempBooking));

    showSuccess("Order placed, see it in upcoming hunts.");
    setTimeout(function () {
      window.location.replace("my_hunts.php");
    }, 1500);
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

function usePoints() {
  var disLabel = document.getElementById("total-w-discount-text");
  var disPrice = document.getElementById("total-w-discount");
  if (document.getElementById("pointsChecked").checked) {
    document.getElementById("total-price").style.textDecoration = 'line-through';
    if(totalPrice >= avlPoints){
      totalWithDis = totalPrice - avlPoints;
      avlPoints = 0;
      document.getElementById("total-w-discount").innerHTML = "£" + totalWithDis;
      document.getElementById("totNumberDisplay").innerHTML = "£" + totalWithDis;
      document.getElementById("totPointsAvailable").innerHTML = avlPoints;
    }else {
      totalWithDis = 0;
      avlPoints = avlPoints - totalPrice;
      document.getElementById("total-w-discount").innerHTML = "£" + totalWithDis;
      document.getElementById("totNumberDisplay").innerHTML = "£" + totalWithDis;
      document.getElementById("totPointsAvailable").innerHTML = avlPoints;
    }
    disLabel.style.opacity = 1;
    disPrice.style.opacity = 1;
  } else {
    document.getElementById("total-price").style.textDecoration = 'none';
    totalWithDis = totalPrice;
    avlPoints = avlPointsDuplicate;
    disLabel.style.opacity = 0;
    disPrice.style.opacity = 0;
    document.getElementById("totNumberDisplay").innerHTML = "£" + totalPrice;
    document.getElementById("totPointsAvailable").innerHTML = avlPoints;
  }
}