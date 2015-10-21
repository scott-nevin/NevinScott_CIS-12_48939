<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns-"http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Page Title</title>
</head>
    <body>
    	<!--Script 1.1 - template.html -->

        <?php #Script 1.6 - concat.php
		
		//create the variables
		$first_name = 'Melissa';
		$last_name  = 'Bank';
		$author = $first_name.' '.$last_name;
		$book = 'The Girls\' Guide to Hunting and Fishing';
		
		//print the values
		echo "<p>The book <em>$book</em> was written by $author.</p>";
		?>
    </body>
</html>