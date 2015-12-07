<?PHP

	//===================================================
	//	SET THE QUESTION NUMBER HERE
	//===================================================	
	$qNum = 'q2';

	//===================================================
	//	GET A QUESTION FROM THE tblquestions TABLE
	//===================================================

	$SQL = "SELECT * FROM tblquestions WHERE tblquestions.QID = '$qNum'";

?>