<?php
	$page_title= 'Thanks for your Vote!';
	include('includes/header.html');
	?>
    <link rel="stylesheet" href="includes/style.css" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
        <b>
<?PHP
session_start();
if ((isset($_SESSION['hasVoted']))) {
	if ($_SESSION['hasVoted'] = '1') {
		print "You've already voted";
		
	}
}
else {
	if (isset($_GET['Submit1']) && isset($_GET['q'])) {

		$selected_radio = $_GET['q'];

		//$user_name = "root";
		//$password = "";
		//$database = "surveyTest";
		//$server = "127.0.0.1";
		$user_name = "48939";
		$password = "48939cis12";
		$database = "Nevin_Scott";
		$server = "209.129.8.2";

		$db_handle = mysql_connect($server, $user_name, $password);
		$db_found = mysql_select_db($database, $db_handle);

		if ($db_found) {
			$_SESSION['hasVoted'] = '1';
			$SQL = "UPDATE sn2395790_entity_answers SET $selected_radio = $selected_radio + 1";
			$result = mysql_query($SQL);
			mysql_close($db_handle);
			print "Thanks for voting!";
		}
		else {
		print "database error";
		}
	}
	else {
		print "You didn't select a voting option!";
	}
}

	//FOR TESTING PURPOSES, REMOVE THIS FOR ACTUAL USE
	// remove all session variables
	session_unset();

	// destroy the session
	session_destroy();


?>

<FORM NAME ="form1" METHOD ="POST" ACTION ="index.php">
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Return to Homepage">
</FORM>
<?php
    include('includes/footer.html');
    ?>
    </b>

<html>
<head>
<title>Process Survey</title>
</head>



<body>

</body>
</html>

