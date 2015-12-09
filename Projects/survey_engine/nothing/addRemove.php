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
      	<p>Here is a list of all questions: </p>
        
        <?php
		//from w3 schools
				$user_name = "root";
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
				 echo "<table><tr><th>ID</th><th>Name</th></tr>";
				 // output data of each row
				 while($row = $result->fetch_assoc()) {
					 echo "<tr><td>".$row["QID"]."</td><td>".$row["Question"]." "."</td></tr>";
				  }
				   echo "</table>";
				} else {
				   echo "0 results";
				}
				$conn->close();
		?> 
		
    
    </div>
	
<?php
    include('../includes/footer.html');
    ?>

<body>
</body>
</html>