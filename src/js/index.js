const hamburgerBtn = document.getElementById("hamburger_closed");
const hamburgerMenu = document.getElementById("menu_closed");
const hamburgerMenuItem = document.getElementById("hamburger_menu_item");
let hamburgerToggle = false;

hamburgerBtn.addEventListener("click", () => {
  hamburgerToggle = !hamburgerToggle;
  hamburgerMenu.id = hamburgerToggle ? "menu_open" : "menu_closed";
});

// Start
let cursorImage = document.querySelectorAll(".category_image")
