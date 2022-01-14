const dollarSign = "$ "
var defaultDestinationDB = [];

$(function initialization() {
    var destinations = JSON.parse(localStorage.getItem("destinations"));
    defaultDestinationDB = destinations;
    console.log(defaultDestinationDB)
    if (defaultDestinationDB) {
        loadDestinationList();
    }
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
        document.getElementById("favouriteId").id = defaultDestinationDB[i].destinationId + "_favourite";

        if (defaultDestinationDB[i].isFavourite == true) {
            document.getElementById(defaultDestinationDB[i].destinationFavId).innerHTML = "favorite";
          } else {
            document.getElementById(defaultDestinationDB[i].destinationFavId).innerHTML = "favorite_border";
          }
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

// $(function () {
//     $("i").click(function () {
//       $("i").toggleClass("press", 1000);
//     });
//   });

function addToFavourites(id) {

  if (!e) var e = window.event;
  e.cancelBubble = true;
  if (e.stopPropagation)
      e.stopPropagation();

  var destination = defaultDestinationDB.find(obj => obj.destinationFavId === id);
  console.log(destination)

  if (destination.isFavourite == true) {
    document.getElementById(id).innerHTML = "favorite_border";
    $.each(defaultDestinationDB, function (key, destination) {
        if (destination.destinationFavId == id) {
            destination.isFavourite = false
        }
    });
    showSuccess("Removed from Favourites List")
    
  } else {
    document.getElementById(id).innerHTML = "favorite";
    $.each(defaultDestinationDB, function (key, destination) {
        if (destination.destinationFavId == id) {
            destination.isFavourite = true
        }
    });
    showSuccess("Added to Favourites List")
  }
  localStorage.setItem("destinations", JSON.stringify(defaultDestinationDB));

}

function goToDestinationMap() {
    window.location = "destination_map.php";
}

function onSearchBtnClick() {
  var userInputValueInHeaderSearch = document.getElementById("destination-search-input").value;

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
