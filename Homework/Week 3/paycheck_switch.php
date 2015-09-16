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
		$hoursMod = (int)($hours / 10);
		switch($hoursMod){
			case  1:  $pay += $hours * $payRate;break;
			case  2: 
			case  3:  $pay += (($hours - 20) * $trplTime) + ( 20 * $payRate);break;
			case  4: 
			case  5:
			case  6:
			case  7:
			case  8:
			case  9:
			case 10:  $pay += (($hours - 40) * $trplTime) + ( 20 * $dblTime) + (20 * $payRate);break;
			default : echo "Invalid entries, please retry";break;
		}
		
		//output results
		echo "<p> Your Hours: ". $hours. " </p>";          //print hours
		echo "<p> Your Pay Rate: $".$payRate. "/hr</p>";   //print pay rate
		echo "<p> Your Pay: $ ". $pay. " </p>";            //print paycheck
		
		
	 
	?>
</body>
</html>