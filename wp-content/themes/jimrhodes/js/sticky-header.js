// When the user scrolls the page, execute myFunction 
window.onscroll = function() { stickyHeader()};

// Get the header
var header = document.getElementById("sticky-header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    document.getElementsByClassName('initials').classList.add("d-block");
    document.getElementsByClassName('burger-initials').classList.remove("d-none");

  } else {
    header.classList.remove("sticky");
    document.getElementsByClassName('initals').classList.remove("d-block");
    document.getElementsByClassName('initials').classList.add("d-none");

  }
}