
var hunts;

var destinationList = JSON.parse(localStorage.getItem("destinations"));
var currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
const starList = ['tour_star_rating_one', 'tour_star_rating_two', 'tour_star_rating_three', 'tour_star_rating_four', 'tour_star_rating_five'];

$(function initialization(){
    initPage();
    populatePastHunts();
});

function initPage() {
    $("#my-hunts-toggle").addClass("ui-btn-active");
    document.getElementById("past-hunts-btn").style.background = "#0174CF";
    document.getElementById("past-hunts-btn").style.color = "white";
    document.getElementById("upcoming-hunts-btn").style.background = "white";
    document.getElementById("upcoming-hunts-btn").style.color = "#c4c4c4";
    $("#past-empty").show();
    $("#upcoming-empty").hide();

   currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
   hunts = currentlySignedInUser.bookings;
   console.log(currentlySignedInUser);

//    if (hunts.isFeedbackGiven == true) {
//     hunts.isFeedbackGiven == false;
//    }

   if (hunts == null) {
    hunts = []
   } else {
    populateUpcomingHunts();
   }

    setupStars();
}


function setupStars() {
   $("#star_rating_one").on("click mouseover", function () {
       $("#star_rating_one").html("star")
       $("#star_rating_two").html("star_border")
       $("#star_rating_three").html("star_border")
       $("#star_rating_four").html("star_border")
       $("#star_rating_five").html("star_border")
   })
   $("#star_rating_two").on("click mouseover", function () {
       $("#star_rating_one").html("star")
       $("#star_rating_two").html("star")
       $("#star_rating_three").html("star_border")
       $("#star_rating_four").html("star_border")
       $("#star_rating_five").html("star_border")
   })
   $("#star_rating_three").on("click mouseover", function () {
       $("#star_rating_one").html("star")
       $("#star_rating_two").html("star")
       $("#star_rating_three").html("star")
       $("#star_rating_four").html("star_border")
       $("#star_rating_five").html("star_border")

   })
   $("#star_rating_four").on("click mouseover", function () {
       $("#star_rating_one").html("star")
       $("#star_rating_two").html("star")
       $("#star_rating_three").html("star")
       $("#star_rating_four").html("star")
       $("#star_rating_five").html("star_border")

   })
   $("#star_rating_five").on("click mouseover", function () {
       $("#star_rating_one").html("star")
       $("#star_rating_two").html("star")
       $("#star_rating_three").html("star")
       $("#star_rating_four").html("star")
       $("#star_rating_five").html("star")
   })
}

function selectPastHunts() {
    $("#upcoming-empty").hide();
    $("#past-empty").show();
    document.getElementById("past-hunts-btn").style.background = "#0174CF";
    document.getElementById("past-hunts-btn").style.color = "white";
    document.getElementById("upcoming-hunts-btn").style.background = "white";
    document.getElementById("upcoming-hunts-btn").style.color = "#c4c4c4";
}

function selectUpcomingHunts() {
    $("#past-empty").hide();
    $("#upcoming-empty").show();
    document.getElementById("upcoming-hunts-btn").style.background = "#0174CF";
    document.getElementById("upcoming-hunts-btn").style.color = "white";
    document.getElementById("past-hunts-btn").style.background = "white";
    document.getElementById("past-hunts-btn").style.color = "#c4c4c4";
}

function populatePastHunts() {

    console.log(destinationList)

    for (var i = 0; i < destinationList.length; i++) {
        if (destinationList.isPastHunt) {
            document.getElementById("past_hunt_card_image").src = destinationList[i].destinationImage;
            document.getElementById("past_my_hunts_location_name").innerHTML = destinationList[i].destinationName;
            document.getElementById("past_my_hunts_tour_date").innerHTML = destinationList[i].tourDate;
            document.getElementById("past_my_hunts_tour_details").innerHTML = destinationList[i].tourDetails;
    
            if ( destinationList[i].tourRating == null) {
                document.getElementById("tour_star_holder").style.display = "none";
                document.getElementById("tour_review").style.display = "none";
            } else {
                document.getElementById("button_space").style.display = "none"
                document.getElementById("tour_star_holder").style.display = "block"
                document.getElementById("tour_review").style.display = "block"
                document.getElementById("tour_rating").innerHTML = destinationList[i].tourRating + ' Stars';
                document.getElementById("tour_review").innerHTML = destinationList[i].tourComment;
    
                for (let j = 0; j < destinationList[i].tourRating; j++) {
                    document.getElementById(starList[j]).innerHTML = 'star';
                }
            }
    
            $("#past_my_hunts_list").clone().appendTo("#past_my_hunts_list_2");
        }
    }

    deleteDuplicateCards("past_my_hunts_list"); 

}

// Delete duplicate cards
function deleteDuplicateCards(idName) {
    var id = document.getElementById(idName);
    id.parentNode.removeChild(id);
}

function populateUpcomingHunts() {

    for (var i = 0; i < hunts.length; i++) {
        document.getElementById("upcoming_hunt_card_image").src = hunts[i].imageUrl;
        document.getElementById("upcoming_my_hunts_location_name").innerHTML = hunts[i].poiName;
        document.getElementById("upcoming_my_hunts_tour_date").innerHTML = "Tour completed on " + hunts[i].bookingDate;
        document.getElementById("upcoming_tour_route").innerHTML = hunts[i].routeStart + " - " + hunts[i].routeFinish;
        document.getElementById("upcoming_tour_duration").innerHTML = hunts[i].durationHours + "h " + hunts[i].durationMin + "m";
        document.getElementById("upcoming_tour_passengers").innerHTML = hunts[i].passengers + " Adults";

        $("#upcoming_my_hunts_list").clone().appendTo("#upcoming_my_hunts_list_2");
    }

    deleteDuplicateCards("upcoming_my_hunts_list"); 

}


function submitFeedback() {
    // destinationId = localStorage.getItem("clickedDestinationId");
    // console.log(destinationId);
    destinations = JSON.parse(localStorage.getItem("destinations"));

   var comment = $("#form_comment").val();
   var starCount = 0;
   $('#star_rating_holder').children('i').each(function () {
       if ($(this).html() == "star") {
           starCount++;
           console.log(starCount)
       }
   });

//    var date = Intl.DateTimeFormat(navigator.language, {
//         day: 'numeric',
//         month: 'numeric',
//         year: 'numeric',
//         hour: 'numeric',
//         minute: 'numeric',
//     }).format(new Date());

//    var review = {
//         name : currentlySignedInUser.username,
//         reviewerId : "destinationId1_rev4",
//         reviewerImage : "images/reviewer1.jpg",
//         reviewCount : "2",
//         rating : starCount,
//         reviewDate : date,
//         reviewDescription : comment,
//         reviewReplies : ''
//     };

   $.each(destinationList, function (key, hunt) {
       if (hunt.huntId == 'mh1') {
            // destination = destinations.find(obj => obj.destinationId === hunt.destinationId);
            
            // destination.destinationReviews.push(review);
            // console.log(destination.destinationReviews);
            // localStorage.setItem("destinations", JSON.stringify(destinations));
            pushReview(hunt.destinationId, starCount, comment);
            // hunt.tourRating = starCount;
            // hunt.tourComment = comment;
            console.log('Feedback Saved');
       }
   });

//    var users = JSON.parse(localStorage.getItem('users'));
//    $.each(users, function (key, user) {
//        if (user.contactNumber === currentlySignedInUser.contactNumber) {
//            users[key] = currentlySignedInUser;
//        }
//    });
//    localStorage.setItem("users", JSON.stringify(users));
//    currentlySignedInUser.bookings = hunts;
//    console.log(hunts);
   localStorage.setItem('destinationList', JSON.stringify(destinationList));
//    showSuccess("Feedback saved.");
   UpdatePoints();
   $("#popupBasic").popup("close")

   setTimeout(function () {
       location.reload();

   }, 2000);
}

function UpdatePoints(){
    currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
    currentlySignedInUser.currentPoints = currentlySignedInUser.currentPoints + 10;
    localStorage.setItem('currentlySignedInUser',JSON.stringify(currentlySignedInUser))
    showSuccess("Feedback saved.");
}

function pushReview(destID, starValue, commentValue) {
    destination = destinationList.find(obj => obj.destinationId === destID);
    reviewNo = destination.destinationReviews.length + 1;

    var date = Intl.DateTimeFormat(navigator.language, {
        day: 'numeric',
        month: 'numeric',
        year: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
    }).format(new Date());

    var review = {
        name : currentlySignedInUser.username,
        reviewerId : destination.destinationId + "_rev" + reviewNo,
        reviewerImage : "images/reviewer1.jpg",
        reviewCount : (currentlySignedInUser.reviewCount + 1),
        rating : starValue,
        reviewDate : date,
        reviewDescription : commentValue,
        reviewReplies : ''
    };

    currentlySignedInUser.reviewCount = currentlySignedInUser.reviewCount + 1;
    localStorage.setItem('currentlySignedInUser',JSON.stringify(currentlySignedInUser))

    destination.destinationReviews.push(review);
    console.log(destination.destinationReviews);
    localStorage.setItem("destinations", JSON.stringify(destinationList));
}
