<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns-"http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Page Title</title>
</head>
    <body>
    	<!--Script 1.1 - template.html -->
        <p>This is standard html.</p>
        <?php # Script 1.9 - constants
		
		//set today's date as a constant:
		define ('TODAY', 'March 16, 2011');
		
		//Print a message, using the predefined constants and the 2Day constant
		echo '<p>Today is ' . TODAY . ' <br />
		 this server is running version <b>'. 
		 PHP_VERSION . '</b> of PHP on the <b>' . 
		 PHP_OS . '</b> operating system.</p>';
		?>
    </body>
</html>