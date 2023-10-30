// header
const burgerButton = document.getElementById("burger");
const menu = document.getElementById("menu");
const overlay = document.querySelector(".overlay");
burgerButton.addEventListener("click", function () {
  burgerButton.classList.toggle("active");
  overlay.classList.toggle("active");
  menu.classList.toggle("active");
});

overlay.addEventListener("click", function () {
  burgerButton.classList.remove("active");
  overlay.classList.remove("active");
  menu.classList.remove("active");
});

// dropdown
const hasSubMenuElements = document.querySelectorAll(".has_sub_menu");

const mainElement = document.querySelector("main");

hasSubMenuElements.forEach(function (element) {
  element.addEventListener("mouseover", function () {
    const otherSubMenus = document.querySelectorAll(".sub_menu:not(.active)");
    otherSubMenus.forEach(function (subMenu) {
      subMenu.style.display = "none";
    });
    const subMenu = this.nextElementSibling;
    subMenu.style.display = "block";
  });
});

mainElement.addEventListener("mouseover", function () {
  const subMenus = document.querySelectorAll(".sub_menu");
  subMenus.forEach(function (subMenu) {
    subMenu.style.display = "none";
  });
});
