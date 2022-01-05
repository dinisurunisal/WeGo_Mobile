
var hunts;
var pastHunts = JSON.parse(localStorage.getItem('pastHunts'));
const starList = ['tour_star_rating_one', 'tour_star_rating_two', 'tour_star_rating_three', 'tour_star_rating_four', 'tour_star_rating_five'];

$(document).on("pageinit", function () {
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
   console.log(hunts);

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

//function setOrder(orderId) {
//    selectedOrder = orderId
//}

function populatePastHunts() {

    console.log(pastHunts)

    for (var i = 0; i < pastHunts.length; i++) {
        document.getElementById("past_hunt_card_image").src = pastHunts[i].imageUrl;
        document.getElementById("past_my_hunts_location_name").innerHTML = pastHunts[i].destName;
        document.getElementById("past_my_hunts_tour_date").innerHTML = pastHunts[i].tourDate;
        document.getElementById("past_my_hunts_tour_details").innerHTML = pastHunts[i].tourDetails;

        if ( pastHunts[i].tourRating == null) {
            document.getElementById("tour_star_holder").style.display = "none";
            document.getElementById("tour_review").style.display = "none";
        } else {
            document.getElementById("button_space").style.display = "none"
            document.getElementById("tour_star_holder").style.display = "block"
            document.getElementById("tour_review").style.display = "block"
            document.getElementById("tour_rating").innerHTML = pastHunts[i].tourRating + ' Stars';
            document.getElementById("tour_review").innerHTML = pastHunts[i].tourComment;

            for (let j = 0; j < pastHunts[i].tourRating; j++) {
                document.getElementById(starList[j]).innerHTML = 'star';
            }
        }


        $("#past_my_hunts_list").clone().appendTo("#past_my_hunts_list_2");
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
        document.getElementById("upcoming_my_hunts_location_name").innerHTML = hunts[i].destName;
        document.getElementById("upcoming_my_hunts_tour_date").innerHTML = hunts[i].tourDate;
        document.getElementById("upcoming_tour_route").innerHTML = hunts[i].tourRoute;
        document.getElementById("upcoming_tour_duration").innerHTML = hunts[i].tourDuration;
        document.getElementById("upcoming_tour_passengers").innerHTML = hunts[i].tourPassengers;

        $("#upcoming_my_hunts_list").clone().appendTo("#upcoming_my_hunts_list_2");
    }

    deleteDuplicateCards("upcoming_my_hunts_list"); 

}


function submitFeedback() {
   var comment = $("#form_comment").val();
   var starCount = 0;
   $('#star_rating_holder').children('i').each(function () {
       if ($(this).html() == "star") {
           starCount++;
           console.log(starCount)
       }
   });

   $.each(pastHunts, function (key, hunt) {
       if (hunt.huntId == 'mh1') {
            hunt.tourRating = starCount;
            hunt.tourComment = comment;
            console.log("Saved");
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
   localStorage.setItem('pastHunts', JSON.stringify(pastHunts));
   showSuccess("Feedback saved.");
   $("#popupBasic").popup("close")

   setTimeout(function () {
       location.reload();

   }, 2000);
}
