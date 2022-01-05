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
    console.log(destinations);
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

    for (var i = 0; i < destination.destinationReviews.length; i++) {
      // document.getElementById("review_thumb_image").src = destination.destinationReviews[i].name;
      document.getElementById("dest_reviewer_name").innerHTML = destination.destinationReviews[i].name;
      document.getElementById("dest_reviewer_count").innerHTML = destination.destinationReviews[i].reviewCount + ' Reviews';
      document.getElementById("dest_review_comment").innerHTML = destination.destinationReviews[i].reviewDescription;
      // document.getElementById("card_details").innerHTML = defaultDestinationDB[i].destinationCardDetails;
      // document.getElementById("card_price").innerHTML = dollarSign + defaultDestinationDB[i].price;
      // document.getElementById("card_star_score").innerHTML = defaultDestinationDB[i].destinationRating;
      // document.getElementById("kitchen-rating-script").innerHTML = (defaultDestinationDB[i].kitchenRatingTotal / defaultDestinationDB[i].kitchenRatingUserNumber).toFixed(1);
  
      $("#card_script_1").clone().appendTo("#card_script_2");
    }

    $('#star_rating_holder').children('i').each(function () {
      if ($(this).html() == "star") {
          starCount++;
      }
    });

    deleteDuplicateCards(); 
}

// Delete 'card_script_1'
function deleteDuplicateCards() {
  var id = document.getElementById("card_script_1");
  id.parentNode.removeChild(id);
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