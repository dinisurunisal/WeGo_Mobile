const dollarSign = "$ "
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
  [{ lat: 51.1739726374, lng: -1.82237671048 }, "Stonehenge", "Stonehenge is a Prehistoric monument in England"],
  [{ lat: 51.381072, lng: -2.359619 }, "The Roman Baths", "The Roman Baths are a Well-preserved thermae"],
  [{ lat: 51.242165698, lng: 0.623997504 }, "Leeds Castle", "Leeds Castle is a castle in Kent, England"],
  [{ lat: 50.66706, lng: -4.75936 }, "Tintagel Castel", "A medieval fortification of Tintagel Island"]
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
  '<h2 id="firstHeading" class="firstHeading">' + title + '</h2>' +
  '<div id="bodyContent">' +
  "<p><b>" + content + "</b></p>" +
  "</div>" +
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
      infoWindow.close();
      infoWindow.open(marker.getMap(), marker);
    });
    
  }, timeout);
}


function goToDestinationList() {
  window.location = "destination_list.php";
}
 