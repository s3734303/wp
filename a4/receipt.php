<?php
include("tools.php");
if(!isset($_SESSION['receipt'])){
	$link="<script>window.open('index.php','_self')</script>";
	echo $link;
}else{
	$receipt = $_SESSION['receipt'];
}
$gst = $receipt['cust']['price']/11;

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Receipt</title>
	<link id='stylecss' type="text/css" rel="stylesheet" href="receipt.css">
</head>

<body id="recept">
	<form>
		<input type="hidden" name='movie[id]' value="<?php echo $receipt['movie']['id'];?>">
		<input type="hidden" name='cust[price]' value="<?php echo $receipt['movie']['hour'];?>">
		
	</form>
	

<article id="receipt_title">
	<div>
	  <h1 style="text-align: center; font-size:35px ">CinemaHub</h1>
		<h5>ABN:00 123 456 789 </h5>
	</div>
<div id="receipt_header"><h1>Tax Invoice</h1></div>
		<div>

  </div>	
	<table width="90%" cellspacing="0" cellpadding="0" id="seat_table" align="center" style="text-align: center">
    <tbody>
      <tr height="50">
        <th scope="col"><h3>SEAT CLASS</h3></th>
        <th scope="col"><h3>QUANTITY</h3></th>
      </tr>
      <tr id="seat_STA" height="40">
        <th scope="row">STA</th>
        <td ><?php echo $receipt['seats']['STA'];?></td>
      </tr>
      <tr id="seat_STP" height="40" >
        <th scope="row">STP</th>
        <td ><?php echo $receipt['seats']['STP'];?></td>
      </tr>
      <tr id="seat_STC" height="40">
        <th scope="row">STC</th>
        <td ><?php echo $receipt['seats']['STC'];?></td>
      </tr>
      <tr id="seat_FCA" height="40">
        <th scope="row">FCA</th>
        <td><?php echo $receipt['seats']['FCA'];?></td>
      </tr>
      <tr id="seat_FCP" height="40">
        <th scope="row">FCP</th>
        <td><?php echo $receipt['seats']['FCP'];?></td>
      </tr>
      <tr id="seat_FCC" height="40">
        <th scope="row">FCC</th>
        <td><?php echo $receipt['seats']['FCC'];?></td>
      </tr>
    </tbody>
</table>
	  <div style="font-size: 25px;margin-bottom: -50px">
    <div align="left" style="width: 75%;display: inline-block"><h1>Total:</h1></div>
    <div id="price_amount" style="display: inline-block;text-align: right">$<?php echo $receipt['cust']['price']?></div>
  </div>
	<div style="text-align: right;width: 95%"><h5>(Include&nbsp;GST<?php echo round($gst,2);?>)</h5></div>
	 <div><h3>Customer Details</h3></div>
<table width="40%"  align="center">
  <tbody>
    <tr>
      <th scope="row">Name</th>
      <td id="cust-name"><?php echo $receipt['cust']['name'];?></td>
      </tr>
    <tr>
      <th scope="row">Email</th>
      <td id="cust-email"><?php echo $receipt['cust']['email'];?></td>
      </tr>
    <tr>
      <th scope="row">Mobile</th>
      <td id="cust-mobile"><?php echo $receipt['cust']['mobile'];?></td>
      </tr>
    <tr>
      <th scope="row">Card</th>
      <td><?php echo $receipt['cust']['card'];?></td>
      </tr>
    <tr>
      <th scope="row">Expiry</th>
      <td><?php echo $receipt['cust']['expiry'];?></td>
      </tr>
    </tbody>
</table>
 
	</article>

<article id="ticket">
	<div><h1 style="font-size: 38px;margin-left: 10%">Ticket</h1><hr></div>
	<div id="movie_name_display"><h2 id="movie_title">movie_name</h2></div>
		<div id="movie_time">
			  <h2 style="display: inline-block"><?php echo $receipt['movie']['day']?>-</h2>
            <h2 id="movie_hour" style="display: inline-block"></h2>
          </div>
	</article>
</body>
	<script src='receipt.js'></script>
</html>
<?php
php2js($receipt['cust']['price'],"price");
session_destroy();

?>