<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Variables and Operators</title>
 <?php
 /*
 	Scott Nevin
	Sept 9th, 2015
	Purpose: Investigate variables and operators
 */
 ?>
</head>

<body>
<?php
	//create variables of all primitive data types
	$ix=(int)(9/5);   //int
	$fx=(float)(9/5); //float
	$fy=3.12e1;       //double float scientific notation *Note* always use small e
	$fz=3120e-2;      //double float scientific notation
	$hx=0xFF;         //hex
	$ox=077;          //octal
	$bx=0b11;         //binary
	$boolx=true;      //boolean
	$booly=false;     //boolean
	$sx="This is a great day!"; //String
	$sy='This is a great day!'; //String
	$sz='\'"This is a great day!"'; //String
	$mx=10%3;         //Modulus operator 
	
	//Display results
	echo "<p> $ix </p>"; //int
	echo "<p> $fx </p>"; //float
	echo "<p> $fy </p>"; //double float scientific notation *Note* always use small e
	echo "<p> $fz </p>"; //double float scientific notation
	echo "<p> $hx </p>"; //hex
	echo "<p> $ox </p>"; //octal
	echo "<p> $bx </p>"; //binary
	echo "<p> $boolx $booly </p>"; //boolean
	echo "<p> $sx </p>"; //String
	echo "<p> $sy </p>"; //String
	echo "<p> $sz </p>"; //String
	echo '<p>"'. $sx .'"</p>'; //String cencantenation
	echo "<p> $mx </p>"; //mod
	
	//Utilize the turnary operator
	$hours=10; //hours worked **change this to test**
	$payRate=15; //pay rate in $ per hour
	//$payChk=$hours*$payRate; //paycheck calc normal
	$payChk=$hours<0?0:
		   ($hours<20?$hours*$payRate:20*$payRate+2*($hours-20)*$payRate); //if than else statement
	//Above* if hours are less than 20, pay normal rate, else pay double time for hours above 20
	//Structure bool ? true : false
	//this statement chains two tests, the second is in () to separate the tests
		
	//output paycheck
	echo "<p> Paycheck = $$payChk </p>";	
	
?>
</body>
</html>