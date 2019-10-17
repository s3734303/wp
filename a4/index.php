<!DOCTYPE html>
<?php
include("tools.php");
?>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible">
    <title>Assignment 4</title>
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
   <!--<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>	-->
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
	<script src='../wireframe.js'></script>
	
	
  </head>

  <body  style="background-color: "#F2F2F2">
	<?php	
			$days = array('MON','TUE','WED','THU','FRI','SAT','SUN');
			$time = array('T12','T15','T18','T21');
			$id   = array('ACT','AHF','ANM','RMC');
			$cust_card = $cust_expiry = $cust_mobile = $cust_email = $cust_name = $movie_id = $movie_day = $movie_hour = "";
			$STA = $STP = $STC = $FCA = $FCC = $FCP = '';
			$price = 0;
			$err_email = $err_card = $err_expiry = $err_name =$err_mobile ="";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				preShow($_POST);
				$card_v = $expiry_v = $mobile_v = $email_v =$name_v = $id_v = $day_v = $hour_v = $price_v = $seat_v = $error = false;
				
				if(filter_var($_POST['cust']['price'],FILTER_VALIDATE_FLOAT) && filter_var($_POST['cust']['price'],FILTER_VALIDATE_FLOAT)>0){
					$price_v = true;	
				}else{
					$error = true;
				}
				if(filter_var( $_POST['cust']['email'],FILTER_VALIDATE_EMAIL)){
					$email_v = true;
					
				}else{
					$err_email = "invalid Email format";
				}
				if(in_array($_POST['movie']['day'],$days)){
					$day_v = true;
				}
				if(in_array( $_POST['movie']['hour'],$time)){
					$hour_v = true;
				}
				if(in_array($_POST['movie']['id'],$id)){
					$id_v =true;
				}
				if(strtotime($_POST['cust']['expiry'])>=time()){
					$expiry_v=true;
				}
				else{				
					$err_expiry=strtotime($_POST['cust']['expiry']);
				}
				if(is_numeric($_POST['cust']['mobile']) && preg_match('^04[0-9]{4}^',$_POST['cust']['mobile'])){
					$mobile_v=true;
				
				}else{
					$err_mobile = "invaid phone number";
				}
				if(is_numeric($_POST['cust']['card']) && (strlen($_POST['cust']['card'])>=14 || strlen($_POST['cust']['card']<=19))){
					$card_v = true;
				}else{
					$err_card = "invalid card";
				}
				if(preg_match('^[a-zA-Z-]{1,100}^',$_POST['cust']['name'])){
					$name_v=true;
				
				}else{
					$err_name="invalid character";
				}
				if($error){
					echo '<img src="../../media/Stop.png" width=100% alt="icon"/>';
				}
				if($card_v&&$expiry_v&&$mobile_v&&$email_v&&$name_v&&$id_v&&$day_v&&$hour_v&&$price_v){
					$_SESSION['receipt'] = $_POST;
					$link="<script>window.open('receipt.php','_self')</script>";
					echo $link;
					
					
				}else{
					session_destroy();
				}
				
			}																				
		?>
	
	<header>
		<div>
		  <div id="nav-logo" class="header">
		<h1>Cinema</h1>
		<a href="index.php"><img src="../../media/logo.png" alt="logo" ></a>
	    </div>
	  <div>
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
<div class="postblock" id="ACT" onclick="showsynopsis(this.id)" >
	  <div class="fixsize"><img src="../../media/avenger.jpg" alt="avenger"/></div>
	  <div class="timetable">
			<h2>Avenger: End Game</h2>
			<h4>PG</h4>
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
		<h4>M</h4>
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
			<h4>PG</h4>
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
				<h4>R</h4>
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
	<div  class="synopsis">
  		<div>
			<h1>Avenger: End Game&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PG</h1>		
			<h3>Plot Description:</h3>
			<h4>After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe. </h4>
    	</div>
		<div id="MoviePanelACT">
			<iframe width="640" height="480" src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		</div>
	</div>
	<div id="RMC" class="synopsis-block">
	<div  class="synopsis">
  		<div>
			<h1>Top End Wedding&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; M</h1>	
			<h3>Plot Description:</h3>
			<h4>Lauren and Ned are engaged, they are in love, and they have just ten days to find Lauren's mother who has gone AWOL somewhere in the remote far north of Australia, reunite her parents and pull off their dream wedding.</h4>
    	</div>
		<div id="MoviePanelRMC">
			<iframe width="640" height="480" src="https://www.youtube.com/embed/uoDBvGF9pPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		</div>		 
	</div>
	<div id="ANM" class="synopsis-block">
	<div  class="synopsis">
  		<div>
			<h1>Dumbo&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PG</h1>
			<h3>Plot Description:</h3>
			<h4>A young elephant, whose oversized ears enable him to fly, helps save a struggling circus, but when the circus plans a new venture, Dumbo and his friends discover dark secrets beneath its shiny veneer.</h4>
    	</div>
		<div id="MoviePanelANM">
			<iframe width="640" height="480" src="https://www.youtube.com/embed/7NiYVoqBt-8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		</div>			 
	</div>
	<div id="AHF" class="synopsis-block">
	<div  class="synopsis">		  
  		<div>
			<h1>The Happy Prince&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; R</h1>
			<h3>Plot Description:</h3>
			<h4>The untold story of the last days in the tragic times of Oscar Wilde, a person who observes his own failure with ironic distance and regards the difficulties that beset his life with detachment and humor.</h4>
    	</div>
		<div id="MoviePanelAHF">
			<iframe width="640" height="480" src="https://www.youtube.com/embed/tXANCJQkUIE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		</div>	
	</div>
	<div id="time">
		<button type="button" onclick="showbooking(this.id,'MON','T18')" id="RMC">Mon-6pm</button>
		<button type="button" onclick="showbooking(this.id,'MON','T12')" id="ANM">Mon-12pm</button>
		<button type="button" onclick="showbooking(this.id,'TUE','T18')" id="RMC">Tue-6pm</button>	
		<button type="button" onclick="showbooking(this.id,'TUE','T12')" id="ANM">Tue-12pm</button>
		<button type="button" onclick="showbooking(this.id,'WED','T21')" id="ACT">Wed-9pm</button>
		<button type="button" onclick="showbooking(this.id,'WED','T18')" id="ANM">Wed-6pm</button>
		<button type="button" onclick="showbooking(this.id,'WED','T12')" id="AHF">Wed-12pm</button>			
		<button type="button" onclick="showbooking(this.id,'THU','T21')" id="ACT">Thu-9pm</button>
		<button type="button" onclick="showbooking(this.id,'THU','T18')" id="ANM">Thu-6pm</button>
		<button type="button" onclick="showbooking(this.id,'THU','T12')" id="AHF">Thu-12pm</button>			
		<button type="button" onclick="showbooking(this.id,'FRI','T21')" id="ACT">Fri-9pm</button>
		<button type="button" onclick="showbooking(this.id,'FRI','T18')" id="ANM">Fri-6pm</button>
		<button type="button" onclick="showbooking(this.id,'FRI','T12')" id="AHF">Fri-12pm</button>			
		<button type="button" onclick="showbooking(this.id,'SAT','T18')" id="ACT">Sat-6pm</button>
		<button type="button" onclick="showbooking(this.id,'SAT','T15')" id="RMC">Sat-3pm</button>
		<button type="button" onclick="showbooking(this.id,'SAT','T12')" id="ANM">Sat-12pm</button>
		<button type="button" onclick="showbooking(this.id,'SAT','T21')" id="AHF">Sat-9pm</button>				
		<button type="button" onclick="showbooking(this.id,'SUN','T18')" id="ACT">Sun-6pm</button>
		<button type="button" onclick="showbooking(this.id,'SUN','T15')" id="RMC">Sun-3pm</button>	
		<button type="button" onclick="showbooking(this.id,'SUN','T12')" id="ANM">Sun-12pm</button>
		<button type="button" onclick="showbooking(this.id,'SUN','T21')" id="AHF">Sun-9pm</button>											 
	</div>
<div>
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="booking" name="bookingform" onsubmit="return formValidation()">
		<div><h3 class="movieselect" id="movie-title"></h3><h3 class="movieselect" id="movie-d"></h3><h3 class="movieselect" id="movie-t"></h3></div>
		<div class="bookingblock">
		  <div class="seatblock">
			Standard
			  <div>
				<label for="seats[STA]">Adult</label>
				<select name="seats[STA]" id="seats-STA" form="booking">
				<option value='<?php echo $STA;?>'>Select</option>											
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
				<label for="seats[STP]">Concession</label>
				<select name="seats[STP]" id="seats-STP" form="booking">
				<option value='<?php echo $STP;?>'>Select</option>											
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
				<label for="seats[STC]">Children</label>
				<select name="seats[STC]" id="seats-STC" form="booking">
				<option value='<?php echo $STC;?>'>Select</option>											
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
					<label for="seats[FCA]">Adult</label>
					<select name="seats[FCA]" id="seats-FCA" form="booking">
					<option value='<?php echo $FCA;?>'>Select</option>											
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
					<label for="seats[FCP]">Concession</label>
					<select name="seats[FCP]" id="seats-FCP" form="booking">
					<option value='<?php echo $FCP;?>'>Select</option>										
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
					<label for="seats[FCC]">Children</label>				  
					<select name="seats[FCC]" id="seats-FCC" form="booking">
					<option value='<?php echo $FCC;?>'>Select</option>										
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
							<h4>Total:</h4>
					  <h4 id="total"></h4>
					</div> 
          </div>
		</div>
		  <div class="bookingblock">
								   
				<div class="filling">
					<label class="filling" for="cust[name]">Name</label>				   
				  <input type="text" 		name='cust[name]'	required="required" pattern="[a-zA-Z \-.']{1,100}" vaule="<?php echo $cust_name;?>"><?= $err_name ?>	
				</div>
																										 
				<div class="filling">
					<label for="cust[email]">Email</label>	
				  <input type="email"		name='cust[email]'	required="required" vaule="<?php echo $cust_email;?>">
					<?= $err_email ?>
				</div>
															  
				<div class="filling">
					<label for="cust[mobile]">Mobile</label>														   
				  <input type="tel"		name='cust[mobile]'	required="required"	pattern="(\(04\)|04|\+614)( ?\d){8}" title="enter 10 digit" vaule="<?php echo $cust_mobile;?>"><?= $err_mobile ?>
				</div>
			
				<div class="filling">
					<label for="cust[card]">Credit Card</label>
				  <input type="text" 		name='cust[card]'	required="required"	pattern="[0-9]{14,19}" title="enter 14-19 number" vaule="<?php echo $cust_card;?>"><?= $err_card ?></div>																								   
				<div class="filling">
					<label for="cust[expiry]">Expiry</label>
				  <input type="month"		name='cust[expiry]'	required="required" vaule="<?php echo $cust_expiry;?>"><?= $err_expiry ?>
				</div>
					<input type="hidden"	id="movie-id"	name='movie[id]' 	value='<?php echo $movie_id;?>'>
					<input type="hidden"	id="movie-day"	name='movie[day]' 	value='<?php echo $movie_day;?>'>
					<input type="hidden"	id="movie-hour"	name='movie[hour]'	value='<?php echo $movie_hour;?>'>
					<input type="hidden"	id="cust-price"	name='cust[price]'	value='<?php echo $price?>'>
				<input type="submit" name="Order">
		  </div>
		  	</div>
				<div>
					

					
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
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
	</div>
  </footer>
</body>
<script src='javascript.js'></script>
</html>
<?php preShow($_POST );?>
<?php preShow($_SESSION['receipt'] );?>
<?php printMyCode();?>
