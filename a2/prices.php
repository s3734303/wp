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
    <table width="1024" border="1">
  <tbody>
    <tr>
      <th scope="col">Seat Type</th>
      <th scope="col"> Seat Code</th>
      <th scope="col">All day Monday and Wednesday<br>
AND 12pm on Weekdays </th>
      <th scope="col">All other times</th>
    </tr>
    <tr>
      <th scope="row">Standard Adult </th>
      <td>STA </td>
      <td>14.00 </td>
      <td>19.80</td>
    </tr>
    <tr>
      <th scope="row">Standard Concession </th>
      <td>STP </td>
      <td>12.50 </td>
      <td>17.50 </td>
    </tr>
    <tr>
      <th scope="row"> Standard Child</th>
      <td>STC </td>
      <td>11.00 </td>
      <td> 15.30</td>
    </tr>
    <tr>
      <th scope="row">First Class Adult </th>
      <td>FCA </td>
      <td>24.00 </td>
      <td>30.00 </td>
    </tr>
    <tr>
      <th scope="row"> First Class Concession</th>
      <td>FCP </td>
      <td> 22.50</td>
      <td>27.00 </td>
    </tr>
    <tr>
      <th scope="row">First Class Child </th>
      <td>FCC </td>
      <td> 21.00</td>
      <td> 24.00</td>
    </tr>
  </tbody>
</table>
  </section>
</main>

    <footer>
<script>
        document.write(new Date().getFullYear());
      </script> 
      Shiou-Ping Chu , s3734303 and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>
        <p>Disclaimer: This website is not a real website and is being developed as part of a Schoolof Science Web Programming course at RMIT University in Melbourne, Australia.</p>
      </div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>

</body>
</html>
