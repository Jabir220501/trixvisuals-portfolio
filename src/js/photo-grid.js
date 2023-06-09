const sliderWrapper = document.querySelector("slider-wrapper");

const sliderOne = document.querySelector("slider-one");
const sliderTwo = document.querySelector("slider-two");
const sliderThree = document.querySelector("slider-three");
const sliderFour = document.querySelector("slider-four");

window.addEventListener("scroll", function (e) {
  let total = $(document).height();
  let current = window.scrollY;
  console.log(current);

  let per = current / total;
});
