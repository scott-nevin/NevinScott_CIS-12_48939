<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Frequency problem examples</title>
		 <?php
         /*
            Scott Nevin
            created: 10/5/15
            Purpose: show examples of how to do frequency problem,
					 implementing different loops to declare different
					 frequencies. Simply add array implementation for
					 displaying in tables and you're done.
         */
         ?>
    </head>
    
        <body>
			<?php
				 //use do while dividing by 10
				 echo "<h1> do while dividing by 10</h1>";
				 $wavLen=1e3;
				 do{
					 echo "<p>Wave Length = " .$wavLen."</p>";
					 $wavLen/=10;
				 }while($wavLen>1e-12);
				 
				 //or use a for loop dividing by 10
				 echo "<h1>for loop dividing by 10</h1>";
				 for($wavLen=1e3;$wavLen>1e-12;$wavLen/=10){
					 echo "<p> Wave length = ".$wavLen."</p>";
				 }
				 
				 //use the power of 10 function - INEFFICIENT
				 echo "<h1>power function</h1>";
				 for($p10=3;$p10>=-12;$p10--){
					 $wavLen=pow(10,$p10);
					 echo "<p> Wave length = ".$wavLen."</p>";
				 }
            ?>
        </body>
</html>