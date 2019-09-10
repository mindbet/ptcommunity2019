(function($){
  $(document).ready(function() {



//MODAL
var modal = document.querySelector(".modal");
var trigger = document.querySelector(".search-init");
var closeButton = document.querySelector(".modal .close-button");
let touchEvent = 'ontouchstart' in window ? 'touchstart' : 'click';

function toggleModal() {
  modal.classList.toggle("show-modal");
  document.getElementById("tbSearch").focus();
}

function windowOnClick(event) {
  if (event.target === modal) {
      toggleModal();
  }
}

if (trigger) {
  trigger.addEventListener("click", toggleModal);
  closeButton.addEventListener("click", toggleModal);
  document.addEventListener(touchEvent, windowOnClick);
}


//ADD ICON TO END OF LIST ITEM

var dropdown = document.querySelectorAll(".expanded > a");
var addcaret = "<img src='/sites/all/themes/basic/images/caret-down.svg' class='downcaret'>"

for (var i = 0; i < dropdown.length; i++) {
  dropdown[i].innerHTML += addcaret;
  };


//CHECK IF PAGE IS FORMULARY KIT
var urlpart = window.location.pathname;
console.log(urlpart);
var pos = urlpart.search('/formkit/');
console.log(pos);
if (pos > -1) {
  document.querySelector("body").classList.remove("has-top-sticky-ad");
}

//HAMBURGER MENU
var hamburger = document.querySelector(".hamburger");
var hamOverlay = document.querySelector(".overlay");
var hamNav = document.querySelector(".menu");
hamburger.addEventListener("click", function(event) {
  hamNav.classList.add("ham-ready", "ham-open");
  hamOverlay.classList.add("overlay-open");
});

hamOverlay.addEventListener("click", function(event) {
  hamNav.classList.remove("ham-open");
  hamOverlay.classList.remove("overlay-open");
});


//MOBILE SUB MENU
var navIcon = document.querySelectorAll("nav ul li.expanded a img");

for (var i = 0; i < navIcon.length; i++) {
  navIcon[i].addEventListener('click', function(event) {
    event.preventDefault();
    if ( window.innerWidth < 780 ) {
      this.closest('li').querySelector('ul').classList.toggle('sub-open');
    }
  });
}


//TOP STICKY AD
var topSticky = document.querySelector(".topad");
var topStickyClose = document.querySelector(".topad .close-button");

topStickyClose.addEventListener("click", function(event) {
  topSticky.classList.add("closed");
  document.querySelector("body").classList.remove("has-top-sticky-ad");
});


  })
})(jQuery)
