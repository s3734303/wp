<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible">
    <title>Assignment 2</title>
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
   <!--<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>	-->
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
	  
<script src='../wireframe.js'></script>
	  <script src='javascript.js'></script>
  </head>

  <body  style="background-color: "#F2F2F2">

  <header>
	  <div>
		  <div id="nav-logo" class="header">
		<h1>Cinema</h1>
		<a href="index.php"><img src="../media/logo.png" alt="logo" ></a>
	    </div>
		  
		  
		  
	  <nav> 
		  <div id="navbar">
		 	 <a href="#aboutus" class="active">About Us</a> </li>
	  		<a href="#prices">Prices</a> </li>      
	 		<a href="#nowshowing">Now Showing</a></li>
	  </div>
      
  </nav>
	  </div> 
			 
	  
  </header>
	  
   
	  
  

<main class="content">
  <section id="aboutus">
	<video	width="100%" autoplay muted playsinline><source src="https://ak4.picdn.net/shutterstock/videos/1015060114/preview/stock-footage-smiling-woman-watching-movie-close-up-of-beautiful-girl-laughing-in-cinema-in-slow-motion.mp4" style="style="visibility: visible;">
	  </video>
  </section>
  
<section id="prices">
	<h1>Prices</h1>
	<div class="grid-container">
    <div class="grid-item">Seat Type</div>
    <div class="grid-item">Seat Code</div>
    <div class="grid-item">All day Monday and Wednesday AND 12pm on Weekdays</div>
    <div class="grid-item">All other times</div>
    <div class="grid-item">Standard Adult</div>
    <div class="grid-item">STA</div>
    <div class="grid-item">14.00</div>
    <div class="grid-item">19.80</div>
    <div class="grid-item">Standard Concession</div>
    <div class="grid-item">STP</div>
    <div class="grid-item">12.50</div>
    <div class="grid-item">17.50</div>
    <div class="grid-item">Standard Child</div>
    <div class="grid-item">STC</div>
    <div class="grid-item">11.00</div>
    <div class="grid-item">15.30</div>
    <div class="grid-item">First Class Adult</div>
    <div class="grid-item">FCA</div>
	<div class="grid-item">24.00</div>
	<div class="grid-item">30.00</div>
	<div class="grid-item">First Class Concession</div>
	<div class="grid-item">FCC</div>
	<div class="grid-item">22.50</div>
	<div class="grid-item">27.00</div>
	<div class="grid-item">First Class Child</div>
	<div class="grid-item">FCC</div>
	<div class="grid-item">21.00</div>
	<div class="grid-item">24.00</div>	  
  </div>
</section>
<section id="nowshowing">
	<h1>Now showing</h1>
	<table>
		<tbody>
			<tr>
				<th scope="col">
					<img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg" alt="avenger"/>
				</th>
				<th scope="col">
					<h2>Avenger: End Game</h2>
					<h5>Wed - 9pm</h5>
					<h5>Thu - 9pm</h5>
					<h5>Fri - 9pm</h5>
					<h5>Sat - 6pm</h5>
					<h5>Sun - 6pm</h5>		
			  </th>
			</tr>
		</tbody>
	</table>
	<table>
		<tbody>
			<tr>
				<th scope="col"><img src="../media/topendwedding.jpg" alt=""/></th>
				<th scope="col">
					<h2>Top End Wedding</h2>
					<h5>Mon - 6pm</h5>
					<h5>Tue - 6pm</h5>
					<h5>Sat - 3pm</h5>
					<h5>Sun - 3pm</h5>
                </th>
			</tr>
		</tbody>
	</table>
	<table>
		<tbody>
			<tr>
				<th scope="col"><img src="https://m.media-amazon.com/images/M/MV5BNjMxMDE0MDI1Ml5BMl5BanBnXkFtZTgwMzExNTU3NjM@._V1_SY1000_CR0,0,675,1000_AL_.jpg"  alt="dumbo"/></th>
				<th scope="col">
					<h2>Dumbo</h2>
					<h5>Mon - 12pm</h5>
					<h5>Tue - 12pm</h5>
					<h5>Wed - 6pm</h5>
					<h5>Thu - 6pm</h5>
					<h5>Fri - 6pm</h5>
					<h5>Sat - 3pm</h5>
					<h5>Sun - 3pm</h5>
                </th>
			</tr>
		</tbody>
	</table>
	<table>
		<tbody>
			<tr>
				<th scope="col"><img src="../media/thehappyprince.jpg" alt=""/></th>
				<th scope="col">
					<h2>The Happy Prince</h2>
					<h5>Wed - 12pm</h5>
					<h5>Thu - 12pm</h5>
					<h5>Fri - 12pm</h5>
					<h5>Sat - 9pm</h5>
					<h5>Sun - 9pm</h5>
                </th>
			</tr>
		</tbody>
	</table>
	
	
</section>
</main>

    <footer>
<script>
        document.write(new Date().getFullYear());
      </script> 
      Put your name(s), student number(s) and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>
        <p>Disclaimer: This website is not a real website and is being developed as part of a Schoolof Science Web Programming course at RMIT University in Melbourne, Australia.</p>
      </div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>


<script>


var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>


</body>
</html>
