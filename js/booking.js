// var booking = [];
// $(document).on("pageinit", function () {
//     initJsonFiles();
// });
// function initJsonFiles() {
//     // localStorage.clear();
//     $.getJSON("json-files/booking.json", function (jsonFile) {
//         booking = jsonFile;
//         console.log(booking);
//         console.log(booking[0]);
//         loadData();
//     });
// }
// function loadData() {
// }

$(document).on("pageinit", function () {
  initPage();
});

var hunts;

var POI = [];
var routeStartID;
var routeStartName;
var routeFinishID;
var routeFinishName;
var durationHours;
var durationMin;
var distance;
var passengers;
var bookingDate;

function initPage() {
  currentlySignedInUser = JSON.parse(
    localStorage.getItem("currentlySignedInUser")
  );
  hunts = currentlySignedInUser.bookings;
  console.log(hunts);
  console.log(currentlySignedInUser);
}

function bookOne() {
  var route = document.getElementById("select-native-1").value;
  var destinationOne = document.getElementById("checkbox-v-2b");
  var destinationTwo = document.getElementById("checkbox-v-2c");
  var destinationThree = document.getElementById("checkbox-v-2d");
  var destinationFour = document.getElementById("checkbox-v-2e");
  var destinationFive = document.getElementById("checkbox-v-2f");
  var date = document.getElementById("datePicker").value;
  var passengers = document.getElementById("select-native-2").value;

  if (destinationOne.checked == true) {
    destinationOne = true;
    POI.push(1);
  } else {
    destinationOne = false;
  }

  if (destinationTwo.checked == true) {
    destinationTwo = true;
    POI.push(2);
  } else {
    destinationTwo = false;
  }

  if (destinationThree.checked == true) {
    destinationThree = true;
    POI.push(3);
  } else {
    destinationThree = false;
  }

  if (destinationFour.checked == true) {
    destinationFour = true;
    POI.push(4);
  } else {
    destinationFour = false;
  }

  if (destinationFive.checked == true) {
    destinationFive = true;
    POI.push(5);
  } else {
    destinationFive = false;
  }

  if (route == 1) {
    routeStartID = "EUS";
    routeStartName = "London Euston";
    routeFinishID = "BHM";
    routeFinishName = "Birmingham street";
    durationHours = 2;
    durationMin = 00;
    distance = "500km";
  } else if (route == 2) {
    routeStartID = "EUS";
    routeStartName = "London Euston";
    routeFinishID = "MAN";
    routeFinishName = "Manchester street";
    durationHours = 1;
    durationMin = 30;
    distance = "300km";
  } else if (route == 3) {
    routeStartID = "EUS";
    routeStartName = "London Euston";
    routeFinishID = "CDF";
    routeFinishName = "Cardiff Central";
    durationHours = 3;
    durationMin = 00;
    distance = "600km";
  } else if (route == 4) {
    routeStartID = "EUS";
    routeStartName = "London Euston";
    routeFinishID = "WCML";
    routeFinishName = "Rugby Railway";
    durationHours = 4;
    durationMin = 00;
    distance = "700km";
  }

  var bookingTemp = {
    bbPOI: POI,
    bbRouteStartID: routeStartID,
    bbRouteStartName: routeStartName,
    bbRouteFinishID: routeFinishID,
    bbRouteFinishName: routeFinishName,
    bbDurationHours: durationHours,
    bbDurationMin: durationMin,
    bbDistance: distance,
    bbDate: date,
    bbPassengers: passengers,
  };

  var tempBooking = JSON.parse(localStorage.getItem("tempBooking"));
//   if (tempBooking == null) {
//     tempBooking = [];
//   }

  tempBooking.push(bookingTemp);
  localStorage.setItem("tempBooking", JSON.stringify(tempBooking));

  // console.log(route);
  // console.log(destinationOne);
  // console.log(destinationTwo);
  // console.log(destinationThree);
  // console.log(destinationFour);
  // console.log(destinationFive);
  // console.log(date);
  // console.log(passengers);
  // console.log(POI);
  // console.log(bookingTemp);

  console.log(tempBooking);
}
