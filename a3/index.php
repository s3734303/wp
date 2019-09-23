<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible">
    <title>Assignment 3</title>
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
   <!--<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>	-->
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
	<script src='../wireframe.js'></script>
	
	
  </head>

  <body  style="background-color: "#F2F2F2">
	
  <header>
	  <div>
		  <div id="nav-logo" class="header">
		<h1>Cinema</h1>
		<a href="index.php"><img src="../../media/logo.png" alt="logo" ></a>
	    </div>
		  
		  
		  
	  <nav> 
		  <div id="navbar">
		 	 <a href="#aboutus" 	class="navlink">About Us</a> </li>
	  		<a href="#prices" 		class="navlink">Prices</a> </li>      
	 		<a href="#nowshowing" 	class="navlink">Now Showing</a></li>
	  </div>
      
  </nav>
	  </div>   
  </header>
<main>
  <section id="aboutus">
	<div class="container" class="content"><video	width="100%" autoplay muted playsinline><source src="https://ak4.picdn.net/shutterstock/videos/1015060114/preview/stock-footage-smiling-woman-watching-movie-close-up-of-beautiful-girl-laughing-in-cinema-in-slow-motion.mp4">
	  </video>
	  <div class="centered">
		  <h2>CinemaHub</h2>
		  <h1>Now Repened.</h1>
		  <h2>We just spend a large chunk of money on renovation, come and see for yourself.</h2>
	  </div>	
    </div>
	<div >
		<h2>Seat Option: standard seat</h2>
	</div>
	<div id="chair">
		<div>
			<h3>&#34;I&prime;m gonna actually spending money on a movie, but the budget option will be fine&#34;, said no one ever.</h3>
		<img src="../../media/standard.png" alt=""/>
	</div>
	<div>
		<h2 >Seat Option: First Class seat</h2>
	</div>
	<div>
			<h3>This one. Obviously.</h3>
		<img src="../../media/firstclass.png" alt=""/>
	</div>				   
	</div>
	
	
							
<div class="parallax container">
	  <div class="top-left">
	    <h2 align="left"> Now with Dolby Vision™</h3>
	    <h5 align="left">Dolby Vision™ was designed for the cinema to deliver incredible color, a million-to-one contrast ratio, and twice the brightness of standard screens. TL;DR: It makes movies look good.</h5>
	  </div>
    </div>
	<div class="container"><img src="https://www.dolby.com/uploadedImages/wwwdolbycom/Content/Platforms/Dolby_Cinema/Dolby_Cinema_Platform_Page/2_MovingAudio_TextRight_V2.jpg?resize=3240:1266" width="100%">
	  <div class="top-right">
		  <h2 align="right" >Enjoy new immersive experience </h2>
		  <h5 align="right">Dolby Atmos® is an industry-leading audio technology that delivers powerful, moving audio that flows all around you. Now available in CinemaHub.
		  </h5>
		</div>
    </div>
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
	<div><h1>Now showing</h1></div>
<div class="postblock" id="ACT" onclick="showsynopsis(this.id)">
	  <div class="fixsize"><img src="../../media/avenger.jpg" alt="avenger"/></div>
	  <div class="timetable">
			<h2>Avenger: End Game</h2>
			<h4>G</h4>
			<h5>Wed - 9pm</h5>
			<h5>Thu - 9pm</h5>
			<h5>Fri - 9pm</h5>
			<h5>Sat - 6pm</h5>
			<h5>Sun - 6pm</h5>
			
		</div>
    </div>
<div class="postblock" id="RMC" onclick="showsynopsis(this.id)">
	<div class="fixsize"><img src="../../media/topendwedding.jpg" alt=""/></div>
	<div class="timetable">
        <h2>Top End Wedding</h2>
		<h4>G</h4>
        <h5>Mon - 6pm</h5>
        <h5>Tue - 6pm</h5>
        <h5>Sat - 3pm</h5>
        <h5>Sun - 3pm</h5>
					  
	</div>
</div>
														
<div class="postblock" id="ANM" onclick="showsynopsis(this.id)">
	<div class="fixsize"><img src="../../media/dumbo.jpg"  alt="dumbo"/></div>
	<div class="timetable">
          <h2>Dumbo</h2>
			<h4>G</h4>
          <h5>Mon - 12pm</h5>
          <h5>Tue - 12pm</h5>
          <h5>Wed - 6pm</h5>
          <h5>Thu - 6pm</h5>
          <h5>Fri - 6pm</h5>
          <h5>Sat - 3pm</h5>
          <h5>Sun - 3pm</h5>
		  </div>
</div>
	<div class="postblock" id="AHF" onclick="showsynopsis(this.id)">
		<div class="fixsize"><img src="../../media/thehappyprince.jpg" alt=""/></div>
	  <div class="timetable">
				<h2>The Happy Prince</h2>
				<h4>G</h4>
				<h5>Wed - 12pm</h5>
				<h5>Thu - 12pm</h5>
				<h5>Fri - 12pm</h5>
				<h5>Sat - 9pm</h5>
				<h5>Sun - 9pm</h5>
				

	</div>
</div>	
</section>
<section id="synopsis" >
	<div id="ACT" class="synopsis-block">
	<div>
		<h1>Avenger: End Game&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PG</h1>						   
    <div>
      
    
	<div  class="synopsis">
  		<div>
			<h3>Plot Description:</h3>
			<h4>After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe. </h4>
    	</div>
		<div class="trailer">
			<iframe width="640" height="480" src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		</div>
	</div>   
	</div>			 
	</div>
	<div id="RMC" class="synopsis-block">
	<div>
		<h1>Top End Wedding&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; M</h1>						   
    <div>
      
    
	<div  class="synopsis">
  		<div>
			<h3>Plot Description:</h3>
			<h4>Lauren and Ned are engaged, they are in love, and they have just ten days to find Lauren's mother who has gone AWOL somewhere in the remote far north of Australia, reunite her parents and pull off their dream wedding.</h4>
    	</div>
		<div class="trailer">
			<iframe width="640" height="480" src="https://www.youtube.com/embed/uoDBvGF9pPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		</div>
	</div>   
	</div>			 
	</div>
	<div id="ANM" class="synopsis-block">
	<div>
		<h1>Dumbo&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PG</h1>						   
    <div>
      
    
	<div  class="synopsis">
  		<div>
			<h3>Plot Description:</h3>
			<h4>A young elephant, whose oversized ears enable him to fly, helps save a struggling circus, but when the circus plans a new venture, Dumbo and his friends discover dark secrets beneath its shiny veneer.</h4>
    	</div>
		<div class="trailer">
			<iframe width="640" height="480" src="https://www.youtube.com/embed/7NiYVoqBt-8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		</div>
	</div>   
	</div>			 
	</div>
	<div id="AHF" class="synopsis-block">
	<div>
		<h1>The Happy Prince&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PG</h1>						   
    <div>
      
    
	<div  class="synopsis">
  		<div>
			<h3>Plot Description:</h3>
			<h4>The untold story of the last days in the tragic times of Oscar Wilde, a person who observes his own failure with ironic distance and regards the difficulties that beset his life with detachment and humor.</h4>
    	</div>
		<div class="trailer">
			<iframe width="640" height="480" src="https://www.youtube.com/embed/tXANCJQkUIE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		</div>
	</div>   
	</div>			 
	</div>
<div id="booking">
		<h2>Make a booking:</h2>
		<form action="/lunardo.">
		  <div class="bookingblock">
			<div class="seatblock">
			Standard
			  <div>
				Adult
				<select name="seats[STA]" form="booking">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>				 
				<option value="7">7</option>				 
				<option value="8">8</option>				 
				<option value="9">9</option>				 
				<option value="10">10</option>				 
			</select>
			  </div>				
			<div>
				Concession
				<select name="seats[STP]" form="booking">
			  	<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>				 
				<option value="7">7</option>				 
				<option value="8">8</option>				 
				<option value="9">9</option>				 
				<option value="10">10</option>				 
		  	</select>
			  </div>
			<div>
				Children
				<select name="seats[STC]" form="booking">
			  	<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>				 
				<option value="7">7</option>				 
				<option value="8">8</option>				 
				<option value="9">9</option>				 
				<option value="10">10</option>				 
			</select>	
			</div>
          </div>
		  		<div class="seatblock">
				First Class
				  <div>
					Adult 
					<select name="seats[FCA]" form="booking">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>				 
					<option value="7">7</option>				 
					<option value="8">8</option>				 
					<option value="9">9</option>				 
					<option value="10">10</option>				 
					</select>
				  </div>
				  <div>
					Concession
					<select name="seats[FCP]" form="booking">
			 		<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>				 
					<option value="7">7</option>				 
					<option value="8">8</option>				 
					<option value="9">9</option>				 
					<option value="10">10</option>				 
					</select>
				  </div>
				  <div>
					Children				  
					<select name="seats[FCC]" form="booking">
			  		<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>				 
					<option value="7">7</option>				 
					<option value="8">8</option>				 
					<option value="9">9</option>				 
					<option value="10">10</option>				 
					</select>
				  </div>
          </div>					   
			</div>
		  <div class="bookingblock">
			<div>Name			<input type="text" 		name="cust[name]	"></div>
			<div>Email			<input type="email"		name="cust[email]	"></div>
			<div>Mobile			<input type="tel"		name="cust[mobile]	"></div>	
			<div>Credit Card	<input type="text" 		name="cust[card]	"></div>
			<div>Expiry			<input type="month"		name="cust[expiry]	"></div>												 </div>
			<div>
					Order<input type="submit"	name="order			">
				</div>
															 
        </form>			
	</div>
</section>
</main>

    <footer>
<script>
        document.write(new Date().getFullYear());
      </script> 
      Shiou-Ping Chu s3734303 Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>
        <p>Disclaimer: This website is not a real website and is being developed as part of a Schoolof Science Web Programming course at RMIT University in Melbourne, Australia.</p>
      </div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>
</body>
<script src='javascript.js'></script>
</html>
