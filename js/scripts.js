function sidenavOpen() {
    document.getElementById('sidenavOpen').style.right = 0 + "px";
    document.body.style.overflow = "hidden";
}

function sidenavClose() {
    document.getElementById('sidenavOpen').style.right = -720 + "px";
    document.body.style.overflow = "auto";
}

// Scroll top code starts here
window.onscroll = function() {
    stickyNavbar()
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function stickyNavbar() {
  if (window.pageYOffset > sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function  portfolioOne() {
  window.open('./cognito','_self');
}

function  portfolioTwo() {
  window.open('./grofers','_self');
}

function  portfolioThree() {
  window.open('./rollery','_self');
}

function  portfolioFour() {
  window.open('./abesit','_self');
}

function teamImgChange() {
  document.querySelector('.teamImg').style.opacity = 0;
  document.querySelector('.teamImgg').style.opacity = 1;
}

function teamImgReverted() {
  document.querySelector('.teamImg').style.opacity = 1;
  document.querySelector('.teamImgg').style.opacity = 0;
}

// window.onscroll = function() {
//   paralaxEffect();
// };

// var paralaxSection = document.getElementById("sec-section-hp");
// var paralax = paralaxSection.offsetTop;

// function paralaxEffect() {
//   if (window.pageYOffset > paralax) {
//     document.getElementsByClassName('sec-section-hp-left')[0].style.transform = translateY(-50 + "px");
//   } else {
//     // navbar.classList.remove("sticky");
//   }
// }