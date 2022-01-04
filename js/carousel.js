$(document).on("pageinit", function () {
  carouselImages = document.querySelector(".carousel_images");
  carouselButtons = document.querySelectorAll(".carousel_button");
  numberOfImages = document.querySelectorAll(".carousel_images img").length;
  imageIndex = 1;
  translateX = 0;

  init();
});

function init(){
  console.log(carouselImages);
  console.log(carouselButtons);
  console.log(numberOfImages);
  console.log(carouselImages.style.transform)

}

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