<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Paycheck calculation if/else</title>
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
		
		//test hours with if else
		if($hours >= 40){
			$pay += (($hours - 40) * $trplTime) + ( 20 * $dblTime) + (20 * $payRate);
		}
		else if($hours > 20 && $hours < 40){
			$pay += (($hours - 20) * $dblTime) + ( 20 * $payRate);
		}
		else if($hours <= 20){
			$pay += $hours * $payRate;
		}
		else{
			$pay = "Invalid entries, please retry";
		}
		
		//output results
		echo "<p> Your Hours: ". $hours. " </p>";          //print hours
		echo "<p> Your Pay Rate: $".$payRate. "/hr</p>";  //print pay rate
		echo "<p> Your Pay: $ ". $pay. " </p>";            //print paycheck
		
		
	 
	?>
</body>
</html>