<html>
<head>
<title>A BASIC HTML FORM</title>

<?PHP
$username ="default";
$password ="";
$email = "";

if (isset($_POST['Submit1'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];


$user_name = "root";
$pass_word = "";
$database = "membertest";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $pass_word);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

	$SQL = "SELECT * FROM members WHERE email = '$email'";

	$result = mysql_query($SQL);

	while ($db_field = mysql_fetch_assoc($result)) {

		print $db_field['ID'] . "<BR>";
		print $db_field['username'] . "<BR>";
		print $db_field['password'] . "<BR>";
		print $db_field['email'] . "<BR>";
	}

	mysql_close($db_handle);

}
else {
	print "Database NOT Found ";
	mysql_close($db_handle);
}


//print $username . " " . $password . " " . $email;

}



?>

</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="magicTest2.php">



username <INPUT TYPE = 'TEXT' Name ='username'  value="<?PHP print $username ; ?>">
password <INPUT TYPE = 'TEXT' Name ='password'  value="">
<P>
email address <INPUT TYPE = 'TEXT' Name ='email'  value="<?PHP print $email ; ?>">


<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Login">
</FORM>






</body>
</html>

