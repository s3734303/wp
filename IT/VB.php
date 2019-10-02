<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible">
    <title>IT</title>
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
   <!--<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>	-->
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
	<script src='../wireframe.js'></script>
	
	
  </head>

  <body  style="background-color: "#F2F2F2">
  <section>
		<h1>Pleace Vote</h1>
    <div>
		<form>
			<table width="200">
			  <tr>
			    <td><label>
			      <input type="radio" name="Vote" value="8" id="Vote">
			      YES</label></td>
		      </tr>
			  <tr>
			    <td><label>
			      <input type="radio" name="Vote" value="1" id="Vote">
			      NO</label></td>
		      </tr>
		  </table>
			<input type="hidden" id="cipherStore" name="cipher" value="1">
			<button type="button" id="sendvote" onclick="vote()">Vote</button>
        </form>
			
	</div>
<div>
  
</div>			
  </section>
  <section>
	<button type="button" id="showresult" onclick="voteCount()">Result!</button>
	<h1 id="result"></h1>	
	</section>
</body>
<script src='javascript.js'></script>
<script src='md5.js'></script>										   
</html>
