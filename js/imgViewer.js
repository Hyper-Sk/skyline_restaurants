const imgElements = document.querySelectorAll('.gallery .image__card img')
const images = []
imgElements.forEach((item) => {
    images.push(item.src)
})

console.log(images)
const viewer = document.getElementById("viewer");
const imageElement = document.getElementById("image");
const prevButton = document.getElementById("prev-view");
const nextButton = document.getElementById("next-view");
const closeButton = document.getElementById("close-view");
const thumbnails = document.querySelectorAll(".gallery img");

let currentIndex = 0;
function updateImage() {
  imageElement.src = images[currentIndex];
  prevButton.disabled = currentIndex === 0;
  nextButton.disabled = currentIndex === images.length - 1;
}
thumbnails.forEach((thumbnail, index) => {
  thumbnail.addEventListener("click", () => {
    currentIndex = index;
    updateImage();
    viewer.style.display = "flex";
  });
});
prevButton.addEventListener("click", () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateImage();
  }
});
nextButton.addEventListener("click", () => {
  if (currentIndex < images.length - 1) {
    currentIndex++;
    updateImage();
  }
});
closeButton.addEventListener("click", () => {
  viewer.style.display = "none";
});
