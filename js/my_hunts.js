
$(document).on("pageinit", function () {
    initPage();
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
    document.getElementById("past-order-inner-list").style.display = "block";
    document.getElementById("upcoming-order-list").style.display = "none";
//    if (!hasPastFound) {
//        $("#past-empty-image").show();
//    } else {
//        $("#past-empty-image").hide();
//    }
}

function selectUpcomingHunts() {
    $("#past-empty").hide();
    $("#upcoming-empty").show();
    document.getElementById("upcoming-hunts-btn").style.background = "#0174CF";
    document.getElementById("upcoming-hunts-btn").style.color = "white";
    document.getElementById("past-hunts-btn").style.background = "white";
    document.getElementById("past-hunts-btn").style.color = "#c4c4c4";
    document.getElementById("past-order-inner-list").style.display = "none";
    document.getElementById("upcoming-order-list").style.display = "block";
//    if (!hasUpcomingFound) {
//        $("#upcoming-empty-image").show();
//
//    } else {
//        $("#upcoming-empty-image").hide();
//    }
}

//function setOrder(orderId) {
//    selectedOrder = orderId
//}

function populatePastOrders() {
    $.each(orders, function (index, order) {
        if (order.isComplete) {
            $('#past-order-inner-list').append("<li class='past_order_card'>\
                <div style = 'height: 100%' class='ui-grid-a'>\
                <div class='ui-block-a image-holder'>\
                    <img class='orders-image'\
                        src='https://www.flatironsquare.co.uk/content/_mobile/Food_Hero_Image.jpg' />\
                </div>\
                <div class='order-info ui-block-b'>\
                    <h1 class='heading-three black bold'>"+ order.title + "</h1>\
                    <p class='paragraph grey thin'> Completed on December 12th, 2019</p>\
                    <hr>\
                        <div class='ui-grid-a'>\
                            <div class='ui-block-a'>\
                                <h1 style='margin:0 auto; ' class='heading-five black bold'>Total</h1>\
                            </div>\
                            <div class='ui-block-b' align='end'>\
                                <h1 style='margin:0 auto; ' class='heading-five black bold'>LKR "+ order.total + "</h1>\
                            </div>\
                        </div>\
                        <div class='feedback-container' id='"+ order.id + "feedback-container'>\
                        </div>\
                        </div>\
                </div>\
                </li>\
                ");
            if (order.feedbackRating == null) {
                $("#" + order.id + "feedback-container").append(
                    "<a style='text-shadow:none;' href='#popupBasic' onclick='setOrder(" + order.id + ")' data-rel='popup' class='button-custom ui-btn ui-shadow ui-corner-all'>Leave Feedback</a>"
                );
            } else {
                $("#" + order.id + "feedback-container").append(
                    "<h6 style='text-align:start; margin-bottom:10px' class='bold grey heading-five'>You've rated this " + order.feedbackRating + " stars. </h6>"
                );
            }
        } else {
            $('#upcoming-order-list').append(
                "<li style='height: 220px' class='past_order_card'>\
                <div style = 'height: 100%' class= 'ui-grid-a'>\
                <div class='ui-block-a image-holder'>\
                    <img class='orders-image'\
                        src='"+ order.imageUrl + "' />\
                </div>\
                <div class='order-info ui-block-b'>\
                    <h1 class='heading-three black bold'> "+ order.title + "</h1>\
                    <p class='paragraph grey thin'> Completed on "+ order.orderDate + "</p>\
                    <hr>\
                        <div style='margin-top:10px' class='ui-grid-a'>\
                            <div class='ui-block-a'>\
                                <h1 style='margin:0 auto; ' class='heading-five black bold'>Total</h1>\
                            </div>\
                            <div class='ui-block-b' align='end'>\
                                <hp style='margin:0 auto; ' class='heading-five black bold'>LKR "+ order.total + "</h1>\
                            </div>\
                        </div>\
                        <div style='margin-top:5px' class='ui-grid-a'>\
                            <div class='ui-block-a'>\
                                <p style='margin:0 auto; ' class='heading-five black bold'>Driver License</p>\
                            </div>\
                            <div class='ui-block-b' align='end'>\
                                <p style='margin:0 auto; ' class='heading-five black bold'>"+ order.driverLicense + "</p>\
                            </div>\
                        </div>\
                        <div style='margin-top:5px' class='ui-grid-a'>\
                            <div class='ui-block-a'>\
                                <p style='margin:0 auto; ' class='heading-five black bold'>Driver Name</p>\
                            </div>\
                            <div class='ui-block-b' align='end'>\
                                <p style='margin:0 auto; ' class='heading-five black bold'>"+ order.driverName + "</p>\
                            </div>\
                        </div>\
                        <div style='margin-top:5px' class='ui-grid-a'>\
                            <div class='ui-block-a'>\
                                <h1 style='margin:0 auto; ' class='heading-five black bold'></h1>\
                            </div>\
                            <div class='ui-block-b' align='end'>\
                                <p style='margin:0 auto; ' class='paragraph grey bold'>"+ order.timeLimit + " mins away.\
                                    </p>\
                            </div>\
                        </div>\
                        <div style='margin-top:5px' class='ui-grid-a'>\
                            <div class='ui-block-a'>\
                                <a onclick='trackOrder("+ order.id + ")' style='text-shadow:none;'\
                                        class='button-custom ui-btn ui-shadow ui-corner-all'>Track</a>\
                        </div>\
                        <div class='ui-block-b' align='end'>\
                            <a href='tel:"+ order.driverTel + "' style='text-shadow:none;'\
                                        class='button-custom ui-btn ui-shadow ui-corner-all'>Call</a>\
                                </div>\
                </div>\
                        </div>\
                    </div>\
                </li>");
        }
    });
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
