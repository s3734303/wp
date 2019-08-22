<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Assignment 2</title>
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
	  
<script src='../wireframe.js'></script>
	  <script src='javascript.js'></script>
  </head>

  <body>
  <header>
	  <div>
		  <div id="nav-logo" class="header">
<!-- Creative Commons image sourced from https://www.freepik.com/free-photos-vectors/icon and used for educational purposes only -->		<a href="index.php"><img src="../media/cinema-logo.png" alt="" width="100"  class="logo"></a>
			<h1 class="logo" >Cinema</h1>
			</div>
		  
		  
		  
	  <nav> 
		  <div id="navbar">
		 	 <a  class=active href="index.php">About Us</a> </li>
	  		<a href="prices.php">Prices</a> </li>      
	 		<a href="nowshowing">Now Showing</a></li>
	  </div>
      
  </nav>
	  </div> 
			 
	  
  </header>
	  
   
	  
  

<main class="content">
  <section id="section-1">
	
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
