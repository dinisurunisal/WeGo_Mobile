$(function initialization(){
  carouselImages = document.querySelector(".carousel_images");
  carouselButtons = document.querySelectorAll(".carousel_button");
  numberOfImages = document.querySelectorAll(".carousel_images img").length;
  imageIndex = 1;
  translateX = 0;

  var destinations = JSON.parse(localStorage.getItem("destinations"));
  var currentlySignedInUser = JSON.parse(localStorage.getItem("currentlySignedInUser"));
  
  document.getElementById("profile_image").src = currentlySignedInUser.profileImage;
  
  defaultDestinationDB = destinations;
  console.log(defaultDestinationDB)

  loadPOI()
});

function carouselMove(id){
  if (id === "c_previous") {
    if (imageIndex !== 1) {
      imageIndex--;
      translateX += 100;
    }
  } else {
    if (imageIndex !== numberOfImages) {
      imageIndex++;
      translateX -= 100;
    }
  }

  carouselImages.style.transform = `translateX(${translateX}vw)`;
}

function loadPOI() {
  document.getElementById("thumbnail_image_one").src = defaultDestinationDB[0].destinationImage;
  document.getElementById("thumbnail_name_one").innerHTML = defaultDestinationDB[0].destinationName;

  document.getElementById("thumbnail_image_two").src = defaultDestinationDB[1].destinationImage;
  document.getElementById("thumbnail_name_two").innerHTML = defaultDestinationDB[1].destinationName;

  document.getElementById("thumbnail_image_three").src = defaultDestinationDB[2].destinationImage;
  document.getElementById("thumbnail_name_three").innerHTML = defaultDestinationDB[2].destinationName;

  document.getElementById("thumbnail_image_four").src = defaultDestinationDB[3].destinationImage;
  document.getElementById("thumbnail_name_four").innerHTML = defaultDestinationDB[3].destinationName;
}

function onDestinationSelect(id) {
  if (typeof (Storage) !== "undefined") {
    localStorage.setItem("clickedDestinationId", id);
    window.location = "destination_selected.php";
  } else {
      showFailure("Unable to load")
  }
}