<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Savings For-Loop</title>
		 <?php
         /*
            Scott Nevin
            created: 09/21/15
            Purpose: Looping constructs practice
         */
         ?>
    </head>
    
     <body>
		 <?php
         	//Declare variables
			$nYears = 50;   //number of years in table
			$iRate  = 0.06; //interest rate
			$prin   = 100;  //initial balance in $
			
			//Create table headings
			echo '<table width="200" border="1">';
			echo '<tr><th>Years</th><th>'.($iRate*100).'% Savings</th></tr>';
			
			//Populate table with info using for-loop row by row
			for($year=1;$year<=$nYears;$year++){
				$prin*=(1+$iRate); //savings calculation
				//create row
				echo '<tr>';
					echo '<td>'.$year.'</td>';
					echo '<td>$'.number_format($prin,2).'</td>'; 
				echo '</tr>';
			}
			echo '</table>';
         ?>
     </body>
</html>
