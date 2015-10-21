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
			$iRateStart = 0.06;
			$prin   = 100;  //initial balance in $
			
			//Create table headings
			echo '<table width="200" border="1">';
			echo '<tr><th>Years</th>';
			$iRate = $iRateStart;
			for($x=0;$x<5;$x++){
					echo '<th>'.($iRate*100).'% Savings</th>';
					$iRate += 0.01;
			}
			echo '</tr>';
			
			//Populate table with info using for-loop row by row
			for($year=1;$year<=$nYears;$year++){
				$iRate = $iRateStart;
				//create row
				echo '<tr>';
					echo '<td>'.$year.'</td>';
					for($x=0;$x<5;$x++){
						$prin*=(1+$iRate);  //calculate with different rates
						$prin=((int)($prin*100))/100;  
						echo '<td>$'.number_format($prin,2).'</td>'; 
						$iRate += 0.01;
					}
					
				echo '</tr>';
			}
			echo '</table>';
         ?>
     </body>
</html>
