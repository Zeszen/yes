//Get the button
let mybutton = document.getElementById("goup");
let allStickButton = document.getElementById("allstick");
let menuStickButton = document.getElementById("menustick");
let header = document.getElementById("header");
let logo = document.getElementById("logo");
let ulSmallBox = document.getElementById("ulSmallBox");
const chk = document.getElementById("chk");
const soom = document.getElementById("soom");
const menu = document.getElementById("logoIconsMenu");
const color = document.getElementById("logoIconsColor");
const smallMenuChk = document.getElementById("smallmenu");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    allStickButton.style.display = "block";
    menuStickButton.style.display = "block";
  } else {
    mybutton.style.display = "none";
    allStickButton.style.display = "none";
    menuStickButton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

chk.addEventListener("change", () => {
  document.body.classList.toggle("dark");
  header.classList.toggle("dark");
  logo.classList.toggle("dark");
  menu.classList.toggle("dark");
  color.classList.toggle("dark");
  dgebi("small").classList.toggle("dark");
});

smallMenuChk.addEventListener("change", () => {
  ulSmallBox.classList.toggle("visible");
});
