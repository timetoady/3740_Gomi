//import anime from "/animejs/lib/anime.es.js";

const hamburger = document.querySelector("#menuIcon");
const navLinks = document.querySelector(".menuLinks");

//Main event handler for mobile menu
hamburger.addEventListener("click", () => {
  if (
    navLinks.classList.contains("default") ||
    navLinks.classList.contains("closed")
  ) {
    // if (window.innerWidth <= 700) {
    //     anime({
    //         targets: navLinks,
    //         translateY: '0%',
    //         easing: 'linear',
    //         duration: 2,
    //     })
    // }
    hamburger.setAttribute("name", "close")
    navLinks.classList.remove("closed");
    navLinks.classList.remove("default");
    navLinks.classList.add("opened");

    console.log("Opened");
  } else if (navLinks.classList.contains("opened")) {
    if (window.innerWidth <= 700) {
        hamburger.setAttribute("name", "menu")
        navLinks.classList.remove("opened");
        navLinks.classList.add("closed");
    }

    console.log("Closed");
  }
});

window.onresize = function() {
    if (window.innerWidth >= 700) {
        navLinks.classList.remove("opened");
        navLinks.classList.remove("closed");
        navLinks.style.display = "block"
        hamburger.setAttribute("name", "close")
    }
    else {
        navLinks.classList.add("closed")
        navLinks.style.display = "none"
        hamburger.setAttribute("name", "menu")
    }
}

