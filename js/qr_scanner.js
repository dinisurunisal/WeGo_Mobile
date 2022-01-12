var destinations;
var hunts;
var destination;
var pastHunts;

$(function initialization(){
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
        let feedbackLink = document.getElementById("feedback_link");

        feedbackLink.click();
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

   var today = new Date();

   var hunt = {
        huntId: 'mh' + (pastHunts.length + 1), 
        destName: destination.destinationName, 
        imageUrl: destination.destinationImage, 
        tourDate:'Tour completed on ' + today.getDate() + "-" + today.getMonth() + "-" + today.getFullYear(), 
        tourDetails:'Scanned Hunt', 
        tourRating: starCount, 
        tourComment: comment, 
        destinationId: destination.destinationId
   }

   pushReview(destination.destinationId, starCount, comment);
   pastHunts.push(hunt);
   localStorage.setItem('pastHunts', JSON.stringify(pastHunts));

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
    destination = destinations.find(obj => obj.destinationId === destID);
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
    localStorage.setItem("destinations", JSON.stringify(destinations));
}
