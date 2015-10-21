<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns-"http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Page Title</title>
</head>
    <body>
    	<!--Script 1.1 - template.html -->
        <p>This is standard html.</p>
        <?php # Scrit 1.8 numbers.php
		
		//set the variables
		$quantity = 30; //buying  30 widgets
		$price = 119.95;
		$taxrate = .05; // 5% sales tax rate
		
		//calculate the total
		$total = $quantity * $price;
		$total = $total + ($total * $taxrate);
		
		//format the total
		$total = number_format($total,2);
		
		//print the results using double quotation marks
		echo "<p>You are purchasing <b>$quantity</b> widget(s) at a cost of
		<b>\$$price</b> each. With tax, the total comes to <b>\$$total</b>.
		</p>\n";
		
		?>
    </body>
</html>