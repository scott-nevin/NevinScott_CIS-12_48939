<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Grade Calculation</title>
	 <?php
	 /*
		Scott Nevin
		Sept 14th, 2015
		Purpose: Input a score and receive a grade
	 */
	 ?>
	</head>

	<body>
	<?php
		//get grade from form
		$let_grade = "NULL";
		$score = $_GET['score'];
		
		//Note* The switch statement is limited in this application and will frequently 
		//      yield a false result
		
		//use the switch construct
		$iscore=(int)($score/10);
		switch($iscore){
			case 10: $grade="A+";break;
			case  9: $grade="A";break;
			case  8: $grade="B";break;
			case  7: $grade="C";break;
			case  6: $grade="D";break;
			case  5: 
			case  4: 
			case  3:
			case  2: 
			case  1: 
			case  0: $grade="F";break;
			default: $grade="Invalid grade";
		}
		
		//If statement for determining pass/fail
		if($score>=60) $praise="You passed!";
		else           $praise="You Failed";
		
		//Ternary operators for determining advice
		$advice = $score>=90?"Excellent work!": 	//if statement to give advice
				  ($score<90&&$score>=80?"Keep up the hard work!":
				  ($score<80&&$score>=70?"Try a bit harder next time. ":
				  ($score<70&&$score>=60?"Barely...": "You've got a lot of work to do.")));
				
		//Output results
		echo "<p> Your Score: ". $score. " </p>"; //print score
		echo "<p> Your Grade: ". $grade. " </p>"; //print grade
		echo "<p> $praise ". $advice. " </p>";     //print possible praise and advice
	?>
	</body>
</html>