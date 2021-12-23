const dollarSign = "$ "
var defaultDestinationDB = [];
let map;

// $(function initialization() {
//     $.getJSON("json-files/destinations.json", function (jsonFile) {
//         defaultDestinationDB = jsonFile;
//         console.log(defaultDestinationDB)

//     });
// });

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: -34.397, lng: 150.644 },
      zoom: 8,
    }
);
}
