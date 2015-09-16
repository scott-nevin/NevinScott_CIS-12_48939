<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Paycheck calculation Switch</title>
 <?php
 /*
 	Scott Nevin
	created: 09/16/15
	Purpose: Calculate paycheck
 */
 ?>
</head>

<body>
	<?php
		//Declare variables
		$hours = $_GET['hours'];
		$payRate = $_GET['payRate'];
		$pay = 0;
		$dblTime = $payRate * 2;
		$trplTime = $payRate * 3;
		
		//test hours with switch
		//$hoursMod = (int)($hours / 10);
		switch($hours<0){
			case  true: echo "Invalid entries, please retry";break; 
			case  false: 
				switch($hours<=20){
					case true: $pay += $hours * $payRate;break;
					case false:
						switch($hours<40&&$hours>20){
							case true: $pay +=  (($hours - 20) * $dblTime) + ( 20 * $payRate);break;
							case false: $pay += (($hours - 40) * $trplTime) + ( 20 * $dblTime) + (20 * $payRate);break;
						}
				}
		}
		
		//output results
		echo "<p> Your Hours: ". $hours. " </p>";          //print hours
		echo "<p> Your Pay Rate: $".$payRate. "/hr</p>";   //print pay rate
		echo "<p> Your Pay: $ ". $pay. " </p>";            //print paycheck
		
		
	 
	?>
</body>
</html>