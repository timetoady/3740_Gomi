//import anime from "/animejs/lib/anime.es.js";

const hamburger = document.querySelector("#menuIcon");
const navLinks = document.querySelector(".menuLinks");
const agentSubLink = document.querySelector(".agentSubLink");
const agentSubMenu = document.querySelector(".agentSubMenu");

//Main event handler for mobile menu
hamburger.addEventListener("click", () => {
  if (
    navLinks.classList.contains("default") ||
    navLinks.classList.contains("closed")
  ) {
    hamburger.setAttribute("name", "close");
    navLinks.classList.remove("closed");
    navLinks.classList.remove("default");
    navLinks.classList.add("opened");

    console.log("Opened");
  } else if (navLinks.classList.contains("opened")) {
    if (window.innerWidth <= 700) {
      hamburger.setAttribute("name", "menu");
      navLinks.classList.remove("opened");
      navLinks.classList.add("closed");
    }

    console.log("Closed");
  }
});

//Event handlers for submenu
agentSubLink.addEventListener("click", () => {
  if (agentSubMenu.classList.contains("close")) {
    agentSubMenu.classList.remove("close");
    agentSubMenu.classList.add("open");
  } else {
    agentSubMenu.classList.remove("open");
    agentSubMenu.classList.add("close");
      }
});

document.addEventListener("click", (event) => {
  const isClickInside = agentSubLink.contains(event.target);
  const isClickInside2 = agentSubMenu.contains(event.target)
  if (!isClickInside && !isClickInside2) {
    console.log("click outside!")
    agentSubMenu.classList.remove("open");
    agentSubMenu.classList.add("close");
  }
});

//fixes menu stuck open on size change
window.onresize = function () {
  if (window.innerWidth >= 700) {
    navLinks.classList.remove("opened");
    navLinks.classList.remove("closed");
    navLinks.style.display = "block";
    hamburger.setAttribute("name", "close");
  } else {
    navLinks.classList.add("closed");
    navLinks.style.display = "none";
    hamburger.setAttribute("name", "menu");
  }
};

//Slider settings
$(document).ready(function () {
  $(".slider").slick({
    adaptiveHeight: true,
    arrows: false,
    lazyLoad: "ondemand",
    dots: true,
  });
});
