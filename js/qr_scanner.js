var destinations;
var hunts;
var destination;
var pastHunts;
var today = new Date();

$(function initialization(){
    $("#back_btn_img").css("fill", "white");

    currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
    destinations = JSON.parse(localStorage.getItem("destinations"));
    pastHunts = JSON.parse(localStorage.getItem('pastHunts'));

    let scanner = new Instascan.Scanner({video: document.getElementById('qr_scan')});

    Instascan.Camera.getCameras().then(function(cameras){
        if(cameras.length > 0) {
            scanner.start(cameras[0]);
        } else {
            alert ('No camera found');
        }
    }).catch(function(e) {
        console.error(e);
    });
    
    scanner.addListener('scan', function(c) {
        $("#feedback_link").click();
        destination = destinations.find(obj => obj.destinationId === c);
        console.log(c)
        setupStars() 
    });
});

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

function submitFeedback() {

   var comment = $("#form_comment").val();
   var starCount = 0;
   $('#star_rating_holder').children('i').each(function () {
       if ($(this).html() == "star") {
           starCount++;
           console.log(starCount)
       }
   });

   pushReview(destination.destinationId, starCount, comment);

   UpdatePoints();
   $("#popupBasic").popup("close")

   setTimeout(function () {
       location.reload();

   }, 2000);
   window.location.href='my_hunts.php'
}

function UpdatePoints(){
    currentlySignedInUser = JSON.parse(localStorage.getItem('currentlySignedInUser'));
    currentlySignedInUser.currentPoints = currentlySignedInUser.currentPoints + 10;
    localStorage.setItem('currentlySignedInUser',JSON.stringify(currentlySignedInUser))
    showSuccess("Feedback saved.");
}

function pushReview(destID, starValue, commentValue) {
    const month = ["01","02","03","04","05","06","07","08","09","10","11","12"];

    destination = destinations.find(obj => obj.destinationId === destID);
    reviewNo = destination.destinationReviews.length + 1;

    var date = Intl.DateTimeFormat(navigator.language, {
        day: 'numeric',
        month: 'numeric',
        year: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
    }).format(new Date());

    destination.isPastHunt = true;

    destination.destinationReviews[1] = {
        name : currentlySignedInUser.username,
        reviewerId : destination.destinationId + "_rev" + reviewNo,
        reviewerImage : currentlySignedInUser.profileImage,
        reviewCount : (currentlySignedInUser.reviewCount + 1),
        rating : starValue,
        reviewDate : date,
        reviewDescription : commentValue,
        tourDate : 'Tour completed on ' + today.getDate() + "-" + month[today.getMonth()] + "-" + today.getFullYear(), 
        tourDetails : 'Scanned Hunt', 
        reviewReplies : []
    };

    currentlySignedInUser.reviewCount = currentlySignedInUser.reviewCount + 1;
    localStorage.setItem('currentlySignedInUser',JSON.stringify(currentlySignedInUser))

    destination.isReviewed = true;
    console.log(destination.destinationReviews);
    localStorage.setItem("destinations", JSON.stringify(destinations));
}
