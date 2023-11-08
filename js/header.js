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

hasSubMenuElements.forEach(function (element) {
  element.addEventListener("click", function (event) {
    event.stopPropagation(); // Prevent the click event from propagating to parent elements
    const subMenu = this.nextElementSibling;
    
    // Check if the submenu is already visible
    if (subMenu.style.display === "block") {
      subMenu.style.display = "none"; // Hide the submenu if it's already visible
    } else {
      // Hide all other submenus
      const otherSubMenus = document.querySelectorAll(".sub_menu:not(.active)");
      otherSubMenus.forEach(function (subMenu) {
        subMenu.style.display = "none";
      });
      
      subMenu.style.display = "block"; // Show the clicked submenu
    }
  });

  element.addEventListener("mouseover", function () {
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
