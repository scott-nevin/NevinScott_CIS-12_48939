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
		
		//Declare variables
		//$score = rand(40,100); //Score variable using random number generator
		
		//if statements for determining grade, independent statements 
		if($score<0)                      $grade="You entered an invalid grade.";
		else if($score>=0  && $score<60)  $grade="F";
		else if($score>=60 && $score<70)  $grade="D";
		else if($score>=70 && $score<80)  $grade="C";
		else if($score>=80 && $score<90)  $grade="B";
		else if($score>=90 && $score<100) $grade="A";
		else if($score>100)               $grade="You entered an invalid grade.";
		
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