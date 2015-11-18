<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $page_title; ?></title>	
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div id="header">
		<h1>BuyStuff.com</h1>
		<h2>Here, you can buy stuff.</h2>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="#">Home Page</a></li>
			<li><a href="#">Log in</a></li>
			<li><a href="#">Shop</a></li>
			<li><a href="#">Cart</a></li>
			<li><a href="#">Administrator</a></li>
		</ul>
	</div>
	<div id="content"><!-- Start of the page-specific content. -->
		<h1>Content Header</h1>
			
			<p>This is where the page-specific content goes. This section, and the corresponding header, will change from one page to the next.</p>

			<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet.</p>
				
	<!-- End of the page-specific content. --></div>
	
<?php
    include('includes/footer.html');
    ?>
</body>
</html>