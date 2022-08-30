const mobileMenu = document.querySelector("#mobileMenu");
const mobileMenuOpenButton = document.querySelector("#mobileMenuOpenButton");
const mobileMenuCloseButton = document.querySelector("#mobileMenuCloseButton");
mobileMenuOpenButton.addEventListener("click", () => {
  mobileMenu.classList.remove("-left-[2000px]");
  mobileMenu.classList.add("left-0");
  document.getElementById("body").style.overflowY = "hidden";
});
mobileMenuCloseButton.addEventListener("click", () => {
  mobileMenu.classList.remove("left-0");
  mobileMenu.classList.add("-left-[2000px]");
  document.getElementById("body").style.overflowY = "auto";
});
