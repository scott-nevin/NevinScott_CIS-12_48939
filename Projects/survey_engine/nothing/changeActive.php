<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add or remove?</title>
</head>

<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<?php
		include('../includes/headerAdmin.html');
		
	?>
    <!-- Start of the page-specific content. -->
		<h1>Change Active Surveys</h1>
      	<p><b>Here is a list of all questions:</b></p>
        
        <?php
		//from w3 schools
				$username = "root";
				$password = "";
				$database = "surveyTest";
				$server = "127.0.0.1";
		
				// Create connection
				$conn = new mysqli($server, $username, $password, $database);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
		
				$sql = "SELECT QID, Question FROM tblquestions";
				$result = $conn->query($sql);
		
				if ($result->num_rows > 0) {
				 echo "<table><tr><th>ID</th><th>Question</th></tr>";
				 // output data of each row
				 while($row = $result->fetch_assoc()) {
					 echo "<tr><td>".$row["QID"]. "&nbsp". "&nbsp"."&nbsp". "&nbsp"."</td><td>".$row["Question"]."</td></tr>";
				  }
				   echo "</table>";
				} else {
				   echo "0 results";
				}
				$conn->close();
				
				//get file variables
				$q1 = file_get_contents("qOfDay.txt");
				$q2 = file_get_contents("qOfWeek.txt");
		?> 
        <b>
        <p>In each text box below, enter a number of a question you would like to active. </p>
        <p>		Enter only the number. For example: for question q2, enter "2" </p></b>
		
    	    <form action="writeActive.php">
 		    Question of the Day: q<input type="text" method="GET" name="day"<br>
  			Question of the Week: q<input type="text"method="GET" name="week"<br>
  			<input type="submit" value="Submit Changes">
			</form> 
        
    </div>
	
<?php
    include('../includes/footer.html');
    ?>

<body>
</body>
</html>