<?php
	$page_title= 'Welcome to Survey Guys!';
	include('../includes/headerAdmin.html');
	?>
     <link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <h1>Set a new question</h1>
			<p>   </p>
<?PHP

$errorMessage = "Error";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		//===================================================
		//	GET THE QUESTION AND ANSWERS FROM THE FORM
		//===================================================
	$question = $_POST['question'];
	$answerA = $_POST['AnswerA'];
	$answerB = $_POST['AnswerB'];
	$answerC = $_POST['AnswerC'];


	$question  = htmlspecialchars($question);
	$answerA = htmlspecialchars($answerA);
	$answerB = htmlspecialchars($answerB);
	$answerC = htmlspecialchars($answerC);



		//============================================
		//	OPEN A CONNECTION THE DATABASE
		//============================================
	$user_name = "root";
	$password = "";
	$database = "surveyTest";
	$server = "127.0.0.1";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);

	if ($db_found) {

		//============================================
		//	GET THE LAST QUESTION NUMBER
		//============================================

		$SQL = "Select * FROM tblquestions";

		$result = mysql_query($SQL);
		$numRows = mysql_num_rows($result);

		$boolLastRow = mysql_data_seek($result, ($numRows - 1));

		$row = mysql_fetch_row($result);

		$qID = $row[0];

		$next_Q_Number = ltrim($qID, 'q');
		$next_Q_Number++;
		$question_Number = 'q' . $next_Q_Number;


		//=========================================================
		//	INSERT THE QUESTION INTO THE tblquestions TABLE
		//=========================================================

		$SQL = "INSERT INTO tblquestions (QID, Question, qA, qB, qC) VALUES ('$question_Number', '$question', '$answerA', '$answerB', '$answerC')";

		$result = mysql_query($SQL);


		//=============================================================
		//	SET A ROW IN THE answers TABLE, WITH THE SAME QID FIELD
		//=============================================================

		$SQL = "INSERT INTO answers (QID, A, B, C) VALUES ('$question_Number', 0, 0, 0)";
		$result = mysql_query($SQL);


		mysql_close($db_handle);

		print "The question has been added to the database";

	}
	else {
		print "Database NOT Found ";
		mysql_close($db_handle);
	}



}


?>


<html>
<head>
<title>Survey Admin Page</title>
</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="setQuestion.php">

Enter a question: <INPUT TYPE = 'TEXT' Name ='question'  value="What is the Question?" maxlength="40">
<p>
Answer A: <INPUT TYPE = 'TEXT' Name ='AnswerA'  value="a" maxlength="20">
Answer B: <INPUT TYPE = 'TEXT' Name ='AnswerB'  value="b" maxlength="20">
Answer C: <INPUT TYPE = 'TEXT' Name ='AnswerC'  value="c" maxlength="20">

<P align = center>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Set this Question">
</P>

</FORM>

<P>
<?PHP //print $errorMessage;?>


<?php
    include('../includes/footer.html');
    ?>

</body>
</html>









