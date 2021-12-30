const carouselImages = document.querySelector(".carousel__images");
const carouselButtons = document.querySelectorAll(".carousel__button");
const numberOfImages = document.querySelectorAll(".carousel__images img").length;
let imageIndex = 1;
let translateX = 0;

carouselButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    if (event.target.id === "previous") {
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

    carouselImages.style.transform = `translateX(${translateX}%)`;
  });
});
