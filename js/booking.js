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

function initPage() {
  currentlySignedInUser = JSON.parse(
    localStorage.getItem("currentlySignedInUser")
  );
  hunts = currentlySignedInUser.bookings;
  console.log(hunts);
  console.log(currentlySignedInUser)
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


    if(destinationOne.checked == true){
        destinationOne = true
    } else {
        destinationOne = false
    }

    if(destinationTwo.checked == true){
        destinationTwo = true
    } else {
        destinationTwo = false
    }

    if(destinationThree.checked == true){
        destinationThree = true
    } else {
        destinationThree = false
    }

    if(destinationFour.checked == true){
        destinationFour = true
    } else {
        destinationFour = false
    }

    if(destinationFive.checked == true){
        destinationFive = true
    } else {
        destinationFive = false
    }

    console.log(route);
    console.log(destinationOne);
    console.log(destinationTwo);
    console.log(destinationThree);
    console.log(destinationFour);
    console.log(destinationFive);
    console.log(date);
    console.log(passengers);
}