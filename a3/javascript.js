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
var booktime = document.getElementById("time");
var bookbutton = booktime.getElementsByTagName("button");
var synopsis =  document.getElementsByClassName("synopsis-block");
document.getElementById("booking").style.display = "none";
for(var k=0;k<synopsis.length;k++){
		synopsis[k].style.display = "none";
	}
for(var l=0;l<bookbutton.length;l++){
	bookbutton[l].style.display = "none";
}
function showsynopsis(movie_id){
	for(var l=0;l<bookbutton.length;l++){
	bookbutton[l].style.display = "none";
}
	for(var k=0;k<synopsis.length;k++){
		synopsis[k].style.display = "none";
	}
	
	synopsis[movie_id].style.display = "initial";
	for(l=0;l<bookbutton.length;l++){
	if(bookbutton[l].id==movie_id){
		bookbutton[l].style.display = "initial";
		}
	}
	bookbutton[l].style.display = "none";
}
function showbooking(movieid, day ,hour){
	document.getElementById("booking").style.display = "initial";
	document.getElementById("movie-id").value=movieid;
	document.getElementById("movie-day").value=day;
	document.getElementById("movie-hour").value=hour;
}