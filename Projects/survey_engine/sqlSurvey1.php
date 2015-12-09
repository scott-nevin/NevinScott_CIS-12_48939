<?PHP

	//get active question from file
	$num = file_get_contents("nothing/qOfWeek.txt");
	$qNum = 'q'.$num;

	//get question form database
	$SQL = "SELECT * FROM tblquestions WHERE tblquestions.QID = '$qNum'";

?>