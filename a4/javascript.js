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
	document.getElementById("synopsis").style.display = "initial";
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
	switch(movieid){
		case "ACT":
			document.getElementById("movie-title").innerHTML = "Avenger: End Game -";
			break;
		case "RMC":
			document.getElementById("movie-title").innerHTML = "Top End Wedding -";
			break;
		case "ANM":
			document.getElementById("movie-title").innerHTML = "Dumbo -";
			break;
		case "AHF":
			document.getElementById("movie-title").innerHTML = "The Happy Prince -";
			break;	
	}
	switch(day){
		case "MON":
			document.getElementById("movie-d").innerHTML = "Monday -";
			break;
		case "TUE":
			document.getElementById("movie-d").innerHTML = "Tuesday -";
			break;
		case "WED":
			document.getElementById("movie-d").innerHTML = "Wednesday -";
			break;
		case "THU":
			document.getElementById("movie-d").innerHTML = "Thursday -";
			break;
		case "FRI":
			document.getElementById("movie-d").innerHTML = "Friday -";
			break;
		case "SAT":
			document.getElementById("movie-d").innerHTML = "Saturday -";
			break;
		case "SUN":
			document.getElementById("movie-d").innerHTML = "Sunday -";
			break;
	}
	switch(hour){
		case "T12":
			document.getElementById("movie-t").innerHTML = "12PM";
			break;
		case "T15":
			document.getElementById("movie-t").innerHTML = "3PM";
			break;
		case "T18":
			document.getElementById("movie-t").innerHTML = "6PM";
			break;
		case "T21":
			document.getElementById("movie-t").innerHTML = "9PM";
			break;
	}
}

function formValidation(){
	var sta = document.forms["bookingform"]["seats[STA]"].value;
	var stp = document.forms["bookingform"]["seats[STP]"].value;
	var stc = document.forms["bookingform"]["seats[STC]"].value;
	var fca = document.forms["bookingform"]["seats[FCA]"].value;
	var fcp = document.forms["bookingform"]["seats[FCP]"].value;
	var fcc = document.forms["bookingform"]["seats[FCC]"].value;
	var exp = document.forms["bookingform"]["cust[expiry]"].value;
	var today = new Date();
	var expiry= new Date(exp);
	
	
	
	if(sta=='' && stp=='' && stc=='' && fca=='' && fcp=='' && fcc==''){
		alert("No ticket selected");
		return false;
	}
	if(expiry.getTime()<today.getTime()){
		alert("Invalid Expiry date");
		return false;
	}
}
function priceCalc(){
	var STA = document.getElementById("seats-STA").selectedIndex;
	var STP = document.getElementById("seats-STP").selectedIndex;
	var STC = document.getElementById("seats-STC").selectedIndex;
	var FCA = document.getElementById("seats-FCA").selectedIndex;
	var FCP = document.getElementById("seats-FCP").selectedIndex;
	var FCC = document.getElementById("seats-FCC").selectedIndex;
	var day=document.getElementById("movie-day").value;
	var time=document.getElementById("movie-hour").value;
	var total;
	if(day=='MON' || day=='WED' || (time=='T12' &&	(day=='TUE' || day =='THU' || day=='FRI')	 )	){
		total = STA*14 + STP*12.5 + STC*11 + FCA*24 + FCP*22.5 + FCC*21;
	}
	else{
		total = STA*19.8 + STP*17.5 + STC*15.3 + FCA*30 + FCP*27 + FCC*24;
	}
	document.getElementById("total").innerHTML ='$' + total.toFixed(2);
}
setInterval(priceCalc,100);
