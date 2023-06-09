const carousel = document.getElementById("showcase_slider");
const next = document.getElementById("showcase_slider_nav_next");
const prev = document.getElementById("showcase_slider_nav_prev");

let threshold = 150;
let slideWidth = 500;
let dragStart, dragEnd;

// next.addEventListener("click", () => shiftSlide(-1));
// prev.addEventListener("click", () => shiftSlide(1));

carousel.addEventListener("mousedown", (event) => {
  if (carousel.classList.contains("transition")) return;
  dragStart = event.pageX;

  carousel.addEventListener("mousemove", (event) => {
    dragEnd = event.pageX;
    carousel.style.transform = `translateX(${dragPos()}px)`;
  });

  document.addEventListener("mouseup", () => {
    if (dragPos() > threshold) {
      return shiftSlide(1);
    }
    if (dragPos() < -threshold) {
      return shiftSlide(-1);
    }
    shiftSlide(0);
  });
});

function dragPos() {
  return dragEnd - dragStart;
}

function shiftSlide(direction) {
  if (carousel.classList.contains("transition")) return;
  dragEnd = dragStart;
  document.removeEventListener("mouseup", shiftSlide);
  carousel.removeEventListener("mousemove");
  carousel.classList.add("transition");
  carousel.style.transform = `translateX(${direction * slideWidth}px)`;

  setTimeout(() => {
    if (direction === 1) {
      carousel.insertBefore(carousel.lastElementChild, carousel.firstElementChild);
    } else if (direction === -1) {
      carousel.appendChild(carousel.firstElementChild);
    }
    carousel.classList.remove("transition");
    carousel.style.transform = "translateX(0px)";
  }, 700);
}
