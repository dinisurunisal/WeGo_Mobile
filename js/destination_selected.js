const dollarSign = "$ "
const starList = ['star_rating_one', 'star_rating_two', 'star_rating_three', 'star_rating_four', 'star_rating_five'];
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
      document.getElementById("review_thumb_image").src = destination.destinationReviews[i].reviewerImage;
      document.getElementById("dest_reviewer_name").innerHTML = destination.destinationReviews[i].name;
      document.getElementById("dest_reviewer_count").innerHTML = destination.destinationReviews[i].reviewCount + ' Reviews';
      document.getElementById("dest_review_comment").innerHTML = destination.destinationReviews[i].reviewDescription;
      document.getElementById("dest_reviewer_date").innerHTML = destination.destinationReviews[i].reviewDate;
  
      for (let j = 0; j <  destination.destinationReviews[i].rating; j++) {
        document.getElementById(starList[j]).innerHTML = 'star';
      }

      $("#card_script_1").clone().appendTo("#card_script_2");
    }

    deleteDuplicateCards(); 

    for (var i = 0; i < destination.destinationReviews.length; i++) {
      document.getElementById("destReviewId").id = destination.destinationId + '_rev' + (i+1);
    }

    // if ( pastHunts[i].huntId === 'mh2') {
    //   document.getElementById("button_space").style.display = "none"
    //   document.getElementById("rating").style.display = "block"
    //   document.getElementById("tour_review").style.display = "block"
    // } else {
    //     document.getElementById("rating").style.display = "none"
    //     document.getElementById("tour_review").style.display = "none"
    // }
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

function onReplyClick(id) {
  console.log(id)
  document.getElementById("des_reply").style.display = "block"
  // if (typeof (Storage) !== "undefined") {
  //   localStorage.setItem("clickedDestinationId", id);
  //   window.location = "destination_selected.php";
  // } else {
  //     showFailure("Unable to load")
  // }
}

function submitReply() {
  var comment = $("#form_comment").val();

  // $.each(hunts, function (key, hunt) {
  //     if (hunt.id == 1) {
  //         hunt.ratingStars = starCount;
  //         hunt.ratingComment = comment;
  //         console.log("Saved");
  //     }
  // });

  // var users = JSON.parse(localStorage.getItem('users'));
  // $.each(users, function (key, user) {
  //     if (user.contactNumber === currentlySignedInUser.contactNumber) {
  //         users[key] = currentlySignedInUser;
  //     }
  // });
  // localStorage.setItem("users", JSON.stringify(users));
  // currentlySignedInUser.bookings = hunts;
  // console.log(hunts);
  // localStorage.setItem("currentlySignedInUser", JSON.stringify(currentlySignedInUser));
  showSuccess("Reply saved.");
  $("#popupBasic").popup("close")

  setTimeout(function () {
      location.reload();

  }, 2000);
}
