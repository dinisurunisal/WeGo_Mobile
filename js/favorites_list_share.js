let dests;
let newFavouriteList = [];

$(function initialization(){
    dests = JSON.parse(localStorage.getItem("destinations"));
    console.log(dests);

    createFavouritesList();
    showHide();
});

function showHide() {
    var faButton = document.getElementById("fa-share-btn");
    var faMessage = document.getElementById("display-message");
    if (newFavouriteList.length == 0) {
        faButton.style.display = "none";
        faMessage.style.display = "block";
    } else {
        faButton.style.display = "block";
        faMessage.style.display = "none";
    }
}

function createFavouritesList() {
    for (var i = 0; i < dests.length; i++) {
        if (dests[i].isFavourite == true) {
            newFavouriteList.push(dests[i]);
        }
    }

    console.log(newFavouriteList);
    loadNewFavouriteList();
}

function loadNewFavouriteList() {
    for (var i = 0; i < newFavouriteList.length; i++) {
        document.getElementById("card_image").src = newFavouriteList[i].destinationImage;
        document.getElementById("card_name").innerHTML = newFavouriteList[i].destinationName;
        document.getElementById("card_details").innerHTML = newFavouriteList[i].destinationCardDetails;
    
        $("#card_script_1").clone().appendTo("#card_script_2");
    }

    deleteDuplicateCards(); 

    for (var i = 0; i < newFavouriteList.length; i++) {
        document.getElementById("clickedId").id = newFavouriteList[i].destinationId;
        document.getElementById("favouriteId").id = newFavouriteList[i].destinationId + "_favourite";

        if (newFavouriteList[i].isFavourite == true) {
            document.getElementById(newFavouriteList[i].destinationFavId).innerHTML = "favorite";
          } else {
            document.getElementById(newFavouriteList[i].destinationFavId).innerHTML = "favorite_border";
          }
    }
}

function onDestinationSelect(id) {
    if (typeof (Storage) !== "undefined") {
      localStorage.setItem("clickedDestinationId", id);
      window.location = "destination_selected.php";
    } else {
        showFailure("Unable to load")
    }
}

function addToFavourites(id) {

    if (!e) var e = window.event;
    e.cancelBubble = true;
    if (e.stopPropagation)
        e.stopPropagation();
  
    var destination = dests.find(obj => obj.destinationFavId === id);
    console.log(destination)
  
    if (destination.isFavourite == true) {
      document.getElementById(id).innerHTML = "favorite_border";
      $.each(dests, function (key, destination) {
          if (destination.destinationFavId == id) {
              destination.isFavourite = false
          }
      });
      showSuccess("Removed from Favourites List")
    } else {
      document.getElementById(id).innerHTML = "favorite";
      $.each(dests, function (key, destination) {
          if (destination.destinationFavId == id) {
              destination.isFavourite = true
          }
      });
      showSuccess("Added to Favourites List")
    }

    setTimeout(function () {
        location.reload();
    }, 500);

    localStorage.setItem("destinations", JSON.stringify(dests));
}

function deleteDuplicateCards() {
    var id = document.getElementById("card_script_1");
    id.parentNode.removeChild(id);
}

function showEmailPopup() {
    $('#emailPopup').popup('open');
}

function closeEmailPopup() {
    $('#emailPopup').popup('close');
}
function sendEmail() {
    var email = $("#emailFormShare").val();
    $("#sendBtn").html('Sending....')
    var favourites = "Hey, here are my favourite destinations that I found on WeGo. \nCheck them out: \n";
    $.each(newFavouriteList, function (key, item) {
        favourites += "\nName : " + item.destinationName + "\nRatings : "+ item.destinationRating + "\nCrowd Range : "+ item.crowdRange+ ",\n"
    });
    jQuery.ajax({
        type: "POST",
        url: 'send_mail_script.php',
        data: { email: email, list: favourites },
        dataType: "json",
        complete: function (response) {
            console.log("done") 
            $("#sendBtn").html('Send')
            showSuccess("Favourites Sent")
            closeEmailPopup();
        },
    }
    )
}