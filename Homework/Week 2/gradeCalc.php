<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Grade Calculation</title>
 <?php
 /*
 	Scott Nevin
	Sept 9th, 2015
	Purpose: Input a score and receive a grade
 */
 ?>
</head>

<body>
<?php
	//Declare variables
	$score = rand(40,100); //Score variable using random number generator
	$grade =$score>=90?"A":		          //if statement to test score and assign grade
			($score<90 && $score>=80?"B":
			($score<80 && $score>=70?"C":
	        ($score<70 && $score>=60?"D": "F")));
	$praise = $score>=60?"You passed!": //variable to test pass/fail
			"Sorry, you failed.";	
	$advice = $score>=90?"Excellent work!": 	//if statement to give advice
			  ($score<90&&$score>=80?"Keep up the hard work!":
			  ($score<80&&$score>=70?"Try a bit harder next time. ":
	          ($score<70&&$score>=60?"Barely...": "You've got a lot of work to do.")));
			
	//Output results
	echo "<p> Your Score: ". $score. " </p>"; //print score
	echo "<p> Your Grade: ". $grade. " </p>"; //print grade
	echo "<p> $praise ". $advice. " </p>";     //print possible praise and advice
	echo "<p> Refresh this page for a new score scenario </p>";
?>
</body>
</html>