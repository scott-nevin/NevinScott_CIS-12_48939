<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Paycheck Calculation Form</title>
	 <?php
	 /*
		Scott Nevin
		Sept 14th, 2015
		Purpose: Form to be used with paycheck program
	 */
	 ?>
	</head>

	<body>
	 <form action="paycheck_switch.php" method="get">
		Please enter hours worked. 
		<input type="text" name="hours"><br>
		Please enter rate of pay in $ per hour.
		<input type="text" name="payRate"><br>
		<input type="submit">
		</form>
	</body>
</html>