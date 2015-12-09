<?PHP

	//===================================================
	//	SET THE QUESTION NUMBER HERE
	//===================================================	
	$num = file_get_contents("nothing/qOfWeek.txt");
	$qNum = 'q'.$num;

	//===================================================
	//	GET A QUESTION FROM THE tblquestions TABLE
	//===================================================

	$SQL = "SELECT * FROM tblquestions WHERE tblquestions.QID = '$qNum'";

?>