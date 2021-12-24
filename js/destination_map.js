const dollarSign = "$ "
var defaultDestinationDB = [];
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
  center: { lat: -34.397, lng: 150.644 },
  zoom: 8,
  });
}

function goToDestinationList() {
  window.location = "destination_list.php";
}
