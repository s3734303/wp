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

  <body style="padding-top: 70px">

  <header>
		<div class="header" >
<!-- Creative Commons image sourced from https://www.freepik.com/free-photos-vectors/icon and used for educational purposes only -->		<a href="index.php"><img src="../media/cinema-logo.png" alt="" width="100" class="title"></a>
			<h1 class="title">Cinema</h1>
	  </div>	 
	  
  </header>
	  
  <div class="sticky">
	  <nav class=topnav> 
      <a href="#">About Us</a> </li>
	  <a href="#">Prices</a> </li>      
	  <a href="#">Now Showing</a></li>
  </nav>
	  </div>  
	  
  

<main class="content">
  <section>
    
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

</body>
</html>
