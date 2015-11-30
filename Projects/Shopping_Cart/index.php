<?php
	$page_title= 'Welcome to Buy Stuff!';
	include('includes/header.html');
	?>
    <link rel="stylesheet" href="includes/style.css" type="text/css" media="screen" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!-- Start of the page-specific content. -->
		<h1>Welcome!</h1>
			<p>   </p>
			<?php
            	echo file_get_contents("hmeGreet.txt");
			?>
            <p>   </p>
	<!-- End of the page-specific content. --></div>
	
<?php
    include('includes/footer.html');
    ?>
</body>
</html>