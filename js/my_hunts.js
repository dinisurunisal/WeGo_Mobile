
$(document).on("pageinit", function () {
    initPage();
    populatePastHunts();
    populateUpcomingHunts();
});

var orders;
//var selectedOrder;
//var currentlySignedInUse
//var hasUpcomingFound;
//var hasPastFound;

function initPage() {
    $("#my-hunts-toggle").addClass("ui-btn-active");
    document.getElementById("past-hunts-btn").style.background = "#0174CF";
    document.getElementById("past-hunts-btn").style.color = "white";
    document.getElementById("upcoming-hunts-btn").style.background = "white";
    document.getElementById("upcoming-hunts-btn").style.color = "#c4c4c4";
    $("#past-empty").show();
    $("#upcoming-empty").hide();
//    currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
//    orders = currentlySignedInUser.orders;
//    console.log(orders);

//    if (orders == null) {
//        orders = []
//    }
//
//    hasUpcomingFound = false;
//    hasPastFound = false;
//    $.each(orders, function (index, order) {
//        if (order.isComplete) {
//            hasPastFound = true;
//        } else {
//            hasUpcomingFound = true;
//        }
//    });
//    $("#past-empty-image").hide();
//
//    $("#upcoming-empty-image").hide();
//
//    if (!hasPastFound) {
//        $("#past-empty").show();
//    } else {
//        $("#past-empty-image").hide();
//    }
//    populatePastOrders();
//    setupStars();
}


//function setupStars() {
//    $("#star_rating_one").on("click mouseover", function () {
//        $("#star_rating_one").html("star")
//        $("#star_rating_two").html("star_border")
//        $("#star_rating_three").html("star_border")
//        $("#star_rating_four").html("star_border")
//        $("#star_rating_five").html("star_border")
//    })
//    $("#star_rating_two").on("click mouseover", function () {
//        $("#star_rating_one").html("star")
//        $("#star_rating_two").html("star")
//        $("#star_rating_three").html("star_border")
//        $("#star_rating_four").html("star_border")
//        $("#star_rating_five").html("star_border")
//    })
//    $("#star_rating_three").on("click mouseover", function () {
//        $("#star_rating_one").html("star")
//        $("#star_rating_two").html("star")
//        $("#star_rating_three").html("star")
//        $("#star_rating_four").html("star_border")
//        $("#star_rating_five").html("star_border")
//
//    })
//    $("#star_rating_four").on("click mouseover", function () {
//        $("#star_rating_one").html("star")
//        $("#star_rating_two").html("star")
//        $("#star_rating_three").html("star")
//        $("#star_rating_four").html("star")
//        $("#star_rating_five").html("star_border")
//
//    })
//    $("#star_rating_five").on("click mouseover", function () {
//        $("#star_rating_one").html("star")
//        $("#star_rating_two").html("star")
//        $("#star_rating_three").html("star")
//        $("#star_rating_four").html("star")
//        $("#star_rating_five").html("star")
//    })
//}

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

    var pastHunts = JSON.parse(localStorage.getItem('pastHunts'));
    console.log(pastHunts);

    for (var i = 0; i < pastHunts.length; i++) {
        document.getElementById("past_hunt_card_image").src = pastHunts[i].imageUrl;
        document.getElementById("past_my_hunts_location_name").innerHTML = pastHunts[i].destName;
        document.getElementById("past_my_hunts_tour_date").innerHTML = pastHunts[i].tourDate;
        document.getElementById("past_my_hunts_tour_details").innerHTML = pastHunts[i].tourDetails;

        if ( pastHunts[i].huntId === 'mh2') {
            document.getElementById("button_space").style.display = "none"
            document.getElementById("rating").style.display = "block"
            document.getElementById("tour_review").style.display = "block"
        } else {
            document.getElementById("rating").style.display = "none"
            document.getElementById("tour_review").style.display = "none"
        }


        $("#past_my_hunts_list").clone().appendTo("#past_my_hunts_list_2");
    }

    deleteDuplicateCards("past_my_hunts_list"); 

    for (var i = 0; i < pastHunts.length; i++) {


    }

}

// Delete duplicate cards
function deleteDuplicateCards(idName) {
    var id = document.getElementById(idName);
    id.parentNode.removeChild(id);
}

function populateUpcomingHunts() {

    var pastHunts = JSON.parse(localStorage.getItem('upcomingHunts'));
    console.log(pastHunts);

    for (var i = 0; i < pastHunts.length; i++) {
        document.getElementById("upcoming_hunt_card_image").src = pastHunts[i].imageUrl;
        document.getElementById("upcoming_my_hunts_location_name").innerHTML = pastHunts[i].destName;
        document.getElementById("upcoming_my_hunts_tour_date").innerHTML = pastHunts[i].tourDate;
        document.getElementById("upcoming_tour_route").innerHTML = pastHunts[i].tourRoute;
        document.getElementById("upcoming_tour_duration").innerHTML = pastHunts[i].tourDuration;
        document.getElementById("upcoming_tour_passengers").innerHTML = pastHunts[i].tourPassengers;

        $("#upcoming_my_hunts_list").clone().appendTo("#upcoming_my_hunts_list_2");
    }

    deleteDuplicateCards("upcoming_my_hunts_list"); 

}
  

//function trackOrder(order) {
//    localStorage.setItem("currentlyTrackingOrder", order);
//    window.location.href = "tracking_screen.php";
//}

//function submitFeedback() {
//    var comment = $("#commentForm").val();
//    var starCount = 0;
//    $('#star_rating_holder').children('i').each(function () {
//        if ($(this).html() == "star") {
//            starCount++;
//        }
//    });
//    $.each(orders, function (key, order) {
//        if (order.id == selectedOrder) {
//            order.feedbackRating = starCount;
//            order.feedbackComment = comment;
//            console.log("Saved");
//        }
//    });
//    var users = JSON.parse(localStorage.getItem('users'));
//    $.each(users, function (key, user) {
//        if (user.contactNumber === currentlySignedInUser.contactNumber) {
//            users[key] = currentlySignedInUser;
//        }
//    });
//    localStorage.setItem("users", JSON.stringify(users));
//    currentlySignedInUser.orders = orders;
//    console.log(orders);
//    localStorage.setItem("currentlySignedInUser", JSON.stringify(currentlySignedInUser));
//    showSuccess("Feedback saved.");
//    $("#popupBasic").popup("close")
//
//    setTimeout(function () {
//        location.reload();
//
//    }, 2000);
//}
