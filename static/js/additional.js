// source : https://www.w3schools.com/howto/howto_js_scroll_to_top.asp
// When the user scrolls down 50px from the top of the document, show the button
window.onload = function() {scrollFunction()};
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("mainMenu").style.display = "block";
  } else {
    document.getElementById("mainMenu").style.display = "none";
  }
}
