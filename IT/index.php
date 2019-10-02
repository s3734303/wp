<?php
echo "PHP functioning";
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>blockNchain</title>
</head>

<body  style="background-color: "#F2F2F2">
<?php
	$sender = $amount = $receiver =$preHashValue= $HashValue = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$sender = input($_POST["sender"]);
		$amount = input($_POST["amount"]);
		$receiver=input($_POST["receiver"]);
		$Chain = file("blockchain.txt");
		if($Chain[count($Chain)-5]==""){
			$preHashValue="NaN";
		}else{
			$preHashValue = $Chain[count($Chain)-5];
		}
		fclose($Chain);
		$HashValue = md5("$sender.$amount.$receiver.$preHashValue");
		
		$addblock = fopen("blockchain.txt", "a");
		fwrite($addblock, "\n".$HashValue."\n" );
		fwrite($addblock, $sender."\n" );
		fwrite($addblock, $amount."\n" );
		fwrite($addblock, $receiver."\n" );
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
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	Your Address: 		<input type="text" name="sender" value="<?php echo $sender;?>"><br>
	Transfer Amount: 	<input type="text" name="amount" value="<?php echo $amount;?>"><br>
	Receiver Address:	<input type="text" name="receiver" value="<?php echo $receiver;?>"><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>
</section>
<?php
	echo $HashValue;
	echo "<br>";
	echo $sender;
	echo "<br>";
	echo $amount;
	echo "<br>";
	echo $receiver;
	echo "<br>";
	echo $preHashValue;
	echo "<br>";												   
?>
</body>
</html>