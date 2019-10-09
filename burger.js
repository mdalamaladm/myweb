var nav = document.getElementById("navigation");
var burgerIcon = document.getElementById("burger-icon");

burgerIcon.addEventListener("click", function(){
  if (nav.className === "nav"){
    nav.className += " responsive";
    burgerIcon.style.backgroundColor = "lightgray";
  } else {
    nav.className = "nav";
    burgerIcon.style.backgroundColor = "transparent";
  }
});