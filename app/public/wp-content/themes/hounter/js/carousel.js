let items = document.querySelectorAll(".carousel .carousel-item");
let items1 = document.querySelectorAll(".carousel-1 .carousel-item");
let items2 = document.querySelectorAll(".carousel-2 .carousel-item");
let items3 = document.querySelectorAll(".carousel-3 .carousel-item");
let nextButton1 = document.querySelector(".carousel-control-next1");
let prevButton1 = document.querySelector(".carousel-control-prev1");
let nextButton2 = document.querySelector(".carousel-control-next2");
let prevButton2 = document.querySelector(".carousel-control-prev2");
let nextButton3 = document.querySelector(".carousel-control-next3");
let prevButton3 = document.querySelector(".carousel-control-prev3");

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
items2.forEach((el) => {
  const minPerSlide = 1;
  let next = el.nextElementSibling;
  for (var i = 1; i < minPerSlide; i++) {
    if (!next) {
      // wrap carousel by using first child
      next = items2[0];
    }
    let cloneChild = next.cloneNode(true);
    el.appendChild(cloneChild.children[0]);
    next = next.nextElementSibling;
  }
});
items3.forEach((el) => {
  const minPerSlide = 3;
  let next = el.nextElementSibling;
  for (var i = 1; i < minPerSlide; i++) {
    if (!next) {
      // wrap carousel by using first child
      next = items3[0];
    }
    let cloneChild = next.cloneNode(true);
    el.appendChild(cloneChild.children[0]);
    next = next.nextElementSibling;
  }
});


//--------------------button for carousel tabs-----------------
function addActiveClassToNextButton1() {
  nextButton1.classList.add("active");
  prevButton1.classList.remove("active");
}
function addActiveClassToNextButton2() {
  nextButton2.classList.add("active");
  prevButton2.classList.remove("active");
}
function addActiveClassToNextButton3() {
  nextButton3.classList.add("active");
  prevButton3.classList.remove("active");
}

addActiveClassToNextButton1();
addActiveClassToNextButton2();
addActiveClassToNextButton3();

nextButton1.addEventListener("click", addActiveClassToNextButton1);
prevButton1.addEventListener("click", () => {
  prevButton1.classList.add("active");
  nextButton1.classList.remove("active");
});
nextButton2.addEventListener("click", addActiveClassToNextButton2);
prevButton2.addEventListener("click", () => {
  prevButton2.classList.add("active");
  nextButton2.classList.remove("active");
});
nextButton3.addEventListener("click", addActiveClassToNextButton3);
prevButton3.addEventListener("click", () => {
  prevButton3.classList.add("active");
  nextButton3.classList.remove("active");
});

//--------------------indicators-----------------
function carouselSlide(slideIndex) {
  var indicators = document.querySelectorAll(".carousel-indicators li");
  var slides = document.querySelectorAll(".carousel-3 .carousel-item");

  for (var i = 0; i < indicators.length; i++) {
    indicators[i].classList.remove("active");
    slides[i].classList.remove("active");
  }

  indicators[slideIndex].classList.add("active");
  slides[slideIndex].classList.add("active");
}
