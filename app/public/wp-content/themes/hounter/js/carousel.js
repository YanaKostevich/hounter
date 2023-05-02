let items1 = document.querySelectorAll(".carousel-1 .carousel-item");
let items = document.querySelectorAll(".carousel .carousel-item");
let nextButton = document.querySelector(".carousel-control-next");
let prevButton = document.querySelector(".carousel-control-prev");

items1.forEach((el) => {
  const minPerSlide = 3;
  let next = el.nextElementSibling;
  for (var i = 1; i < minPerSlide; i++) {
    if (!next) {
      // wrap carousel by using first child
      next = items1[0];
    }
    let cloneChild = next.cloneNode(true);
    el.appendChild(cloneChild.children[0]);
    next = next.nextElementSibling;
  }
});

items.forEach((el) => {
  const minPerSlide = 4;
  let next = el.nextElementSibling;
  for (var i = 1; i < minPerSlide; i++) {
    if (!next) {
      // wrap carousel by using first child
      next = items[0];
    }
    let cloneChild = next.cloneNode(true);
    el.appendChild(cloneChild.children[0]);
    next = next.nextElementSibling;
  }
});

function addActiveClassToNextButton() {
  nextButton.classList.add("active");
  prevButton.classList.remove("active");
}

addActiveClassToNextButton();

nextButton.addEventListener("click", addActiveClassToNextButton);
prevButton.addEventListener("click", () => {
  prevButton.classList.add("active");
  nextButton.classList.remove("active");
});
