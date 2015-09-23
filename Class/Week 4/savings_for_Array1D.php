<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Savings For-Loop using 1D Array</title>
		 <?php
         /*
            Scott Nevin
            created: 09/23/15
            Purpose: Looping constructs practice with Arrays
         */
         ?>
    </head>
    
     <body>
		 <?php
         	//Declare variables
			$nYears = 50;   //number of years in table
			$iRate  = 0.06; //interest rate
			$prin   = 100;  //initial balance in $
			//Declare 1 dimensional Parallel arrays
			$years=array();
			$savings=array();
			
			//Fill the arrays
			for($year=0;$year<=$nYears;$year++){
				$years[$year]=$year;
				$savings[$year]=$prin*pow((1+$iRate),$year); //savings calculation
				$savings[$year]=number_format($savings[$year],2,'.',''); //limiting w/truncation
			}
			
			//Create table headings
			echo '<table width="200" border="1">';
			echo '<tr><th>Years</th><th>'.($iRate*100).'% Savings</th></tr>';
			
			//Populate table with info using for-loop row by row using the arrays
			for($year=0;$year<=$nYears;$year++){
				//create row
				echo '<tr>';
					echo '<td>'.$years[$year].'</td>';
					echo '<td>$'.$savings[$year].'</td>'; 
				echo '</tr>';
			}
			echo '</table>';
         ?>
     </body>
</html>
