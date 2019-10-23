
<!doctype html>
<html>
<head>
<link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
<script src="js/md5.min.js"></script>
<meta charset="UTF-8">
<title>blockNchain</title>
</head>

<body  style="background-color: "#F2F2F2">
<?php
	$sender = $amount = $receiver =$preHashValue= $HashValue = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$Hash='';
		$nonce =0;
		$sender = input($_POST["sender"]);
		$amount = input($_POST["amount"]);
		$receiver=input($_POST["receiver"]);
		$time = time();
		$Chain = file("blockchain.txt");
		if($Chain[0]==null){
			$preHashValue="NaN\n";
		}else{
			$preHashValue = substr($Chain[count($Chain)-1], 0, 32);
		}
		while('f'.(substr(sha1("$sender.$amount.$receiver.$time.$preHashValue.$nonce"),0,5))!= 'f00000'){
			$nonce++;
		}
		$HashValue = sha1("$sender.$amount.$receiver.$time.$preHashValue.$nonce");
		$addblock = fopen("blockchain.txt", "a");
		fwrite($addblock, "\n".$HashValue.":" );
		fwrite($addblock, $sender.":" );
		fwrite($addblock, $amount.":" );
		fwrite($addblock, $receiver.":" );
		fwrite($addblock, $time.":" );
		fwrite($addblock, $preHashValue);
		fclose($addblock);
	}
	function input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
}

?>
<section>
  <div id="setup">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		<div class="inputfield">Your Address: <input type="text" name="sender" required value="<?php echo $sender;?>"><br></div>
    	<div class="inputfield">Transfer Amount:<input type="text" name="amount" required value="<?php echo $amount;?>"><br></div>
    	<div class="inpubfield">Receiver Address:<input type="text" name="receiver" required value="<?php echo $receiver;?>"><br></div>
		<div class="inpubfield"><input type="submit" name="submit" value="Submit"></div>		
	</form>
    																								 
  </div>
</section>
<section id="record">
					<?php 
						$lines=file("blockchain.txt");
						$index =0;
						foreach($lines as $line){
							if($line!="\n"){
								$bloc_arr = preg_split("/\:/",$line);
							echo "<Div>
										<h5>Index: $index</h5>
										<p>Hash :$bloc_arr[0]</p>
										<p>Sender :$bloc_arr[1]</p>
										<p>Amount :$bloc_arr[2]</p>
										<p>Receiver :$bloc_arr[3]</p>
										<p>Time :$bloc_arr[4]</p>
										<p>Previous Hash :$bloc_arr[5]</p>
										<hr>
										
							</Div>";
							$index++;
							}
							
						}
					$index = 0;
		 ?>	
</body>
</html>