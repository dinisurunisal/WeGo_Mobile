const dollarSign = "$ "
var destinationId;
var destination;
var destinations;

$(document).on("pageinit", function () {
    initialize();
});

function initialize() {
    destinationId = localStorage.getItem("clickedDestinationId");
    console.log(destinationId);
    destinations = JSON.parse(localStorage.getItem("destinations"));
    destination = destinations.find(obj => obj.destinationId === destinationId);
    loadData();
    // renderList();
    // setHeight();
    // document.getElementById("#nav_bar_search").classList.add("ui-btn-active");
}

function loadData(){
    $('.sel-dest-image').attr('src', destination.destinationImage);
    $('#dest_sel_heading_name').text(destination.destinationName);
    $('#dest_sel_star_score').text(destination.destinationRating);
    $('#dest_sel_about').text(destination.destinationCardDetails);
    $('#dest_sel_time').text(destination.time);
    $('#dest_sel_address').text(destination.location.addressName);
    $('#dest_sel_crowd').text(destination.crowdRange);
    $('#dest_sel_price').text(dollarSign + ' ' + destination.price);

    document.getElementById("favouriteId").id = destination.destinationFavId;

    if (destination.isFavourite == true) {
        document.getElementById(destination.destinationFavId).innerHTML = "favorite";
    } else {
        document.getElementById(destination.destinationFavId).innerHTML = "favorite_border";
    }
}

function addToFavourites(id) {

    if (!e) var e = window.event;
    e.cancelBubble = true;
    if (e.stopPropagation)
        e.stopPropagation();
  
    if (destination.isFavourite == true) {
      document.getElementById(id).innerHTML = "favorite_border";
      $.each(destinations, function (key, item) {
          if (item.destinationFavId == id) {
            item.isFavourite = false
          }
      });
      
    } else {
      document.getElementById(id).innerHTML = "favorite";
      $.each(destinations, function (key, item) {
          if (item.destinationFavId == id) {
            item.isFavourite = true
          }
      });
      showSuccess("Added to Favourites List")
    }
    localStorage.setItem("destinations", JSON.stringify(destinations));
  
  }