const dollarSign = "$ "
var defaultDestinationDB = [];
let map;

const tourStops = [
  [{ lat: 51.510357, lng: -0.116773 }, "London's Big Ben", "London's iconic national timepiece"],
  [{ lat: 51.504831314, lng: -0.072333044 }, "Tower of London", "Medieval castle housing the crown jewels"],
  [{ lat: 51.501, lng: -0.142 }, "Buckingham Palace", "Home of the British Queen & State Rooms"],
  [{ lat: 52.0, lng: -1.6999972 }, "Cotswolds", "Hills with medieval villages & churches"],
  [{ lat: 51.513870, lng: -0.098362 }, "St. Paul's Cathedral", "Iconic cathedral's churchyard & garden"],
  [{ lat: 52.2796, lng: -1.5852 }, "Warwick Castle", "Iconic clifftop fortress & dungeons"],
  [{ lat: 53.957162838, lng: -1.07583303 }, "York Minster", "Iconic gothic-style medieval cathedral"],
  [{ lat: 51.518757, lng: -0.126168 }, "British Museum", "A historian's treasure trove"],
];

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
  center: { lat: 52.3555177, lng: -1.1743197 },
  zoom: 6,
  });

  drop();
}

function drop() {

  // Create the markers.
  tourStops.forEach(([position, title, content], i) => {

    addMarkerWithTimeout(position, i * 200, title, content);
  });
}

function addMarkerWithTimeout(position, timeout, title, content) {

  const contentString =
  '<div id="content">' +
  '<div id="siteNotice">' +
  "</div>" +
  '<h3 id="firstHeading" class="firstHeading">' + title + '</h3>' +
  "</div>";

  // Create an info window to share between markers.
  const infoWindow = new google.maps.InfoWindow({
    content: contentString,
    maxWidth: 200,
  });

  window.setTimeout(() => {
    const marker = new google.maps.Marker({
        position: position,
        map,
        title: `${title}`,
        animation: google.maps.Animation.DROP,
        optimized: false,
    });

    // Add a click listener for each marker, and set up the info window.
    marker.addListener("click", () => {
      document.getElementById("treasure_hunt_selected_name").innerHTML = title;
      document.getElementById("treasure_hunt_selected_details").innerHTML = content;
      infoWindow.close();
      infoWindow.open(marker.getMap(), marker);
    });
    
  }, timeout);
}
 
function onGameSearchClick() {
  var userInputValueInHeaderSearch = document.getElementById("game-search-box").value;

  if (userInputValueInHeaderSearch == "") {
      showFailure("Enter a destination name!");
  } else {
      localStorage.setItem("filterDB", null);
      if (typeof (Storage) !== "undefined") {
          localStorage.setItem("userSearchValue", JSON.stringify({ "type": "search", "value": userInputValueInHeaderSearch }));
          console.log(localStorage)
          // window.location = "browse_kitchen.php";
      } else {
          showFailure("Your browser does not support Frese");
      }
  }
}