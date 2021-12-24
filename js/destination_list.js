const dollarSign = "$ "
var defaultDestinationDB = [];

$(function initialization() {
    $.getJSON("json-files/destinations.json", function (jsonFile) {
        defaultDestinationDB = jsonFile;
        console.log(defaultDestinationDB)

        loadDestinationList();
    });
});

function loadDestinationList() {

    for (var i = 0; i < defaultDestinationDB.length; i++) {
        document.getElementById("card_image").src = defaultDestinationDB[i].destinationImage;
        document.getElementById("card_name").innerHTML = defaultDestinationDB[i].destinationName;
        document.getElementById("card_details").innerHTML = defaultDestinationDB[i].destinationCardDetails;
        document.getElementById("card_price").innerHTML = dollarSign + defaultDestinationDB[i].price;
        document.getElementById("card_star_score").innerHTML = defaultDestinationDB[i].destinationRating;
        // document.getElementById("kitchen-rating-script").innerHTML = (defaultDestinationDB[i].kitchenRatingTotal / defaultDestinationDB[i].kitchenRatingUserNumber).toFixed(1);
    
        $("#card_script_1").clone().appendTo("#card_script_2");
    }

    deleteDuplicateCards(); 

    for (var i = 0; i < defaultDestinationDB.length; i++) {
        document.getElementById("clickedId").id = defaultDestinationDB[i].destinationId;
    }
}


function popupDestinationRestoreDefault() {
  restoreDefaultFilter(); // This function can be found in "destination_filter_popup.js" file
}

// Delete 'card_script_1'
function deleteDuplicateCards() {
  var id = document.getElementById("card_script_1");
  id.parentNode.removeChild(id);
}

function onDestinationSelect(id) {
  if (typeof (Storage) !== "undefined") {
    localStorage.setItem("clickedDestinationId", id);
    window.location = "destination_selected.php";
  } else {
      showFailure("Unable to load")
  }
}

$(function () {
  $("i").click(function () {
    $("i").toggleClass("press", 1000);
  });
});

function addToFavourites(id) {

  if (!e) var e = window.event;
  e.cancelBubble = true;
  if (e.stopPropagation)
      e.stopPropagation();

  var favVal = $("#" + id).html();
  var users = JSON.parse(localStorage.getItem('users'));
  var sellers = JSON.parse(localStorage.getItem('sellers'));

  var currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
  if (favVal == "favorite") {
      $.each(sellers, function (key, seller) {
          if (seller.sellerId == id.replace("favourite", "")) {
              $.each(users, function (key, user) {
                  if (user.contactNumber == currentlySignedInUser.contactNumber) {

                      var filteredUser = user.favouritesList.filter(function (value, index, arr) {
                          return value.sellerId != seller.sellerId

                      });
                      user.favouritesList = filteredUser;
                      var filteredCurrentUser = currentlySignedInUser.favouritesList.filter(function (value, index, arr) {
                          return value.sellerId != seller.sellerId
                      });
                      currentlySignedInUser.favouritesList = filteredCurrentUser;
                      localStorage.setItem("users", JSON.stringify(users));
                      localStorage.setItem("currentlySignedInUser", JSON.stringify(currentlySignedInUser));
                      $("#" + id).html("favorite_border");
                  }
              });
          }
      });
  } else {
      console.log(sellers);
      $.each(sellers, function (key, seller) {
          if (seller.sellerId == id.replace("favourite", "")) {
              $.each(users, function (key, user) {
                  if (user.contactNumber == currentlySignedInUser.contactNumber) {
                      user.favouritesList.push({ 'sellerId': seller.sellerId, 'kitchenName': seller.kitchenName });
                      currentlySignedInUser.favouritesList.push({ 'sellerId': seller.sellerId, 'kitchenName': seller.kitchenName });
                      localStorage.setItem("users", JSON.stringify(users));
                      localStorage.setItem("currentlySignedInUser", JSON.stringify(currentlySignedInUser));
                      $("#" + id).html("favorite");
                      showSuccess("Added to Favourites List")

                  }
              });
          }
      });


  }

}

function goToDestinationMap() {
    window.location = "destination_map.php";
}
