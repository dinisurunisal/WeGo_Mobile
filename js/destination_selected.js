const dollarSign = "$ "
const starList = ['star_rating_one', 'star_rating_two', 'star_rating_three', 'star_rating_four', 'star_rating_five'];
var destinationId;
var destination;
var destinations;
var currentlySignedInUser;
var replyId;

$(function initialization(){
  destinationId = localStorage.getItem("clickedDestinationId");
  currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
  console.log(destinationId);
  destinations = JSON.parse(localStorage.getItem("destinations"));
  destination = destinations.find(obj => obj.destinationId === destinationId);
  console.log(destinations);
  loadData();
  // renderList();
  // setHeight();
  // document.getElementById("#nav_bar_search").classList.add("ui-btn-active");
});

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

    const calDate = function (date = new Date()) {

      let timePassed = Math.trunc((new Date() - new Date(date)) / 1000);
    
      //seconds
      if (timePassed < 60)
        return 'Just now';
    
      //minutes
      timePassed = Math.trunc(timePassed / 60);
      if (timePassed < 60)
        return `${timePassed} minute${timePassed === 1 ? '' : 's'} ago`;
    
      //hours
      timePassed = Math.trunc(timePassed / 60);
      if (timePassed < 24)
        return `${timePassed} hour${timePassed === 1 ? '' : 's'} ago`;
    
      //Days
      timePassed = Math.trunc(timePassed / 24);
      
      if (timePassed === 1) return 'Yesteday';
      if (timePassed < 7) return `${timePassed} days ago`;
      if (timePassed <= 28)
        return `${Math.trunc(timePassed / 7)} week${
          timePassed < 14 ? '' : 's'
        } ago`;
    
      const curDate = new Date(date);
      const convDate = new Intl.DateTimeFormat(navigator.language).format(curDate);
      return convDate;
    };

    for (var i = 0; i < destination.destinationReviews.length; i++) {
      $("#review_thumb_image").attr("src", destination.destinationReviews[i].reviewerImage);
      $("#dest_reviewer_name").text(destination.destinationReviews[i].name);
      $("#dest_reviewer_count").text(destination.destinationReviews[i].reviewCount + ' Reviews');
      $("#dest_review_comment").text(destination.destinationReviews[i].reviewDescription);
      $("#dest_reviewer_date").text(calDate(destination.destinationReviews[i].reviewDate));
  
      for (let j = 0; j <  destination.destinationReviews[i].rating; j++) {
        document.getElementById(starList[j]).innerHTML = 'star';
      }

      var replyList = destination.destinationReviews[i].reviewReplies;

      for (let j = 0; j < replyList.length; j++) {
        // $("#review_thumb_image").attr("src", replyList[j].replierImage);
        $("#replier_name").text(replyList[j].name);
        $("#replier_reviews").text(replyList[j].reviewCount + ' Reviews');
        $("#dest_review_reply").text(replyList[j].replyDescription);
        $("#replier_time").text((replyList[j].replyDate));

        $("#des_reply").clone().appendTo("#reply_space");

      }

      var id2 = document.getElementById("des_reply");
      id2.parentNode.removeChild(id2);

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
  var repliesSection = $("#"+id).find("#des_reply");
  if(repliesSection.css("display") == "block") {
    repliesSection.css("display", "none");
  } else {
    repliesSection.css("display", "block");
  }
}

function submitReply(id) {
  var replyMessage = $("#form_reply").val();
  var count = destination.destinationReviews[1].reviewReplies.length;
  destination.destinationReviews[1].reviewReplies[count] = {
      name: currentlySignedInUser.username,
      reviewCount: currentlySignedInUser.reviewCount,
      replierImage: currentlySignedInUser.profileImage,
      replyDescription: replyMessage,
  };

  console.log(destination.destinationReviews[1].reviewReplies);
  localStorage.setItem("destinations", JSON.stringify(destinations));

  showSuccess("Reply saved.");
  $("#popupBasic").popup("close")

  // setTimeout(function () {
  //     location.reload();

  // }, 2000);
}
