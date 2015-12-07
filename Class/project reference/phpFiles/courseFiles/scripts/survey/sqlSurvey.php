<?PHP

	//===================================================
	//	SET THE QUESTION NUMBER HERE
	//===================================================
	$qNum = 'q5';

	//===================================================
	//	GET A QUESTION FROM THE tblquestions TABLE
	//===================================================

	$SQL = "SELECT * FROM tblquestions WHERE tblquestions.QID = '$qNum'";

?>