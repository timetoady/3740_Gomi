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
    agentSubLink.textContent = "AGENTS▼";
  } else {
    agentSubMenu.classList.remove("open");
    agentSubMenu.classList.add("close");
    agentSubLink.textContent = "AGENTS►";
  }
});

document.addEventListener("click", (event) => {
  const isClickInside = agentSubLink.contains(event.target);
  const isClickInside2 = agentSubMenu.contains(event.target);
  if (!isClickInside && !isClickInside2) {
    console.log("click outside!");
    agentSubMenu.classList.remove("open");
    agentSubMenu.classList.add("close");
    agentSubLink.textContent = "AGENTS►";
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

//Active link
// const setActive = (currentURL) => {
//   let theNav = document.querySelectorAll(".menuLinks a");
// [...theNav].forEach((link) => {
//   link.addEventListener('click', () => {
//     console.log(`Clicked link ${link}!`)

//     let url = link.getAttribute('href');
//     currentURL.includes(url) ? link.classList.add('activeLink') : link.classList.remove('activeLink')
//   })

// });
// };


// $(function () {
//   $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass(
//     "activeLink"
//   );
// });

let theNav = document.querySelectorAll(".menuLinks a");
window.addEventListener("load", () => {
  [...theNav].forEach((link) => {
    let splitLocation = window.location.href.split("/")
    console.log(splitLocation)
    let currentPageBit = splitLocation[splitLocation.length - 1]
    console.log(`Current page stub: ${currentPageBit}`)
    console.log(`This link: ${link.href}`)
    link.href.includes(currentPageBit) 
      ? link.classList.add("activeLink")
      : link.classList.remove("activeLink");
  });
});

// window.addEventListener("load", () => {
//   // window.location.href.includes(url)
//   //   ? link.classList.add("activeLink")
//   //   : link.classList.remove("activeLink");
//   setTimeout(() => {
//     [...theNav].forEach((link) => {
//       let url = link.getAttribute("href");
//       console.log(url);
//       console.log(window.location.href);
//       if (window.location.href.includes(url)) {
//         link.classList.add("activeLink");
//         console.log(`added active to ${link}`);
//       } else {
//         link.classList.remove("activeLink");
//         console.log(`Link ${link} not active.`);
//       }
//     }, 7000);
//   });
// });
