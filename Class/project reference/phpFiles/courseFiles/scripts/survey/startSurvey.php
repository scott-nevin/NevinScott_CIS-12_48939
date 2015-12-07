<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Begin Survey</title>
</head>

<body>

	<?php
		include 'survey.php';
		
			$progress++;
			$num = 'q' + $progress;
			$SQL = "SELECT * FROM tblquestions WHERE tblquestions.QID = '$num'";
			$result = mysql_query($SQL);
			
			if(isset($result)) header('Location: survey.php');
	?>
</body>
</html>