// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

//bottom
var link = navbar.getElementsByClassName("navlink");
for (var i = 0; i < link.length; i++) {
  link[i].addEventListener("click", function() {

  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}

var synopsis =  document.getElementsByClassName("synopsis-block");
document.getElementById("booking").style.display = "none";
for(var k=0;k<synopsis.length;k++){
		synopsis[k].style.display = "none";
	}
function showsynopsis(movie_id){
	document.getElementById("booking").style.display = "initial";
	for(var k=0;k<synopsis.length;k++){
		synopsis[k].style.display = "none";
	}
	
		synopsis[movie_id].style.display = "initial";
}